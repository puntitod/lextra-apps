<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_en')->nullable();
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('application_url')->nullable();
            $table->date('open_date')->nullable();
            $table->date('close_date')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        $this->createPermissions();
    }

    public function down(): void
    {
        if (Schema::hasTable('permissions')) {
            DB::table('permissions')
                ->whereIn('name', $this->permissionNames())
                ->delete();

            cache()->forget('spatie.permission.cache');
        }

        Schema::dropIfExists('careers');
    }

    private function createPermissions(): void
    {
        if (! Schema::hasTable('permissions') || ! Schema::hasTable('roles')) {
            return;
        }

        $now = now();

        foreach ($this->permissionNames() as $permissionName) {
            DB::table('permissions')->insertOrIgnore([
                'name' => $permissionName,
                'guard_name' => 'web',
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        $adminRoleId = DB::table('roles')->where('name', 'admin')->value('id');

        if ($adminRoleId && Schema::hasTable('role_has_permissions')) {
            $permissionIds = DB::table('permissions')
                ->whereIn('name', $this->permissionNames())
                ->pluck('id');

            foreach ($permissionIds as $permissionId) {
                DB::table('role_has_permissions')->insertOrIgnore([
                    'permission_id' => $permissionId,
                    'role_id' => $adminRoleId,
                ]);
            }
        }

        cache()->forget('spatie.permission.cache');
    }

    private function permissionNames(): array
    {
        return [
            'ViewAny:Career',
            'View:Career',
            'Create:Career',
            'Update:Career',
            'Delete:Career',
            'Restore:Career',
            'ForceDelete:Career',
            'ForceDeleteAny:Career',
            'RestoreAny:Career',
            'Replicate:Career',
            'Reorder:Career',
        ];
    }
};
