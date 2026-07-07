<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->string('name_id');
            $table->string('name_en')->nullable();
            $table->longText('description_id')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('product_category_id')
                ->nullable()
                ->after('id')
                ->constrained('product_categories')
                ->nullOnDelete();
        });

        if (Schema::hasTable('products') && DB::table('products')->exists()) {
            $now = now();
            $firstProduct = DB::table('products')
                ->whereNotNull('images')
                ->orderBy('sort_order')
                ->first();
            $images = $firstProduct?->images ? json_decode($firstProduct->images, true) : [];

            $categoryId = DB::table('product_categories')->insertGetId([
                'slug' => Str::slug('Kanopi'),
                'is_active' => true,
                'sort_order' => 1,
                'name_id' => 'Kanopi',
                'name_en' => 'Canopy',
                'description_id' => 'Pilihan produk kanopi untuk rumah, carport, teras, dan area komersial.',
                'description_en' => 'Canopy product options for homes, carports, terraces, and commercial areas.',
                'thumbnail' => is_array($images) ? ($images[0] ?? null) : null,
                'created_at' => $now,
                'updated_at' => $now,
            ]);

            DB::table('products')
                ->whereNull('product_category_id')
                ->update([
                    'product_category_id' => $categoryId,
                    'updated_at' => $now,
                ]);
        }

        if (Schema::hasTable('permissions') && Schema::hasTable('roles')) {
            $now = now();
            $permissionNames = [
                'ViewAny:ProductCategory',
                'View:ProductCategory',
                'Create:ProductCategory',
                'Update:ProductCategory',
                'Delete:ProductCategory',
                'Restore:ProductCategory',
                'ForceDelete:ProductCategory',
                'ForceDeleteAny:ProductCategory',
                'RestoreAny:ProductCategory',
                'Replicate:ProductCategory',
                'Reorder:ProductCategory',
            ];

            foreach ($permissionNames as $permissionName) {
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
                    ->whereIn('name', $permissionNames)
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
    }

    public function down(): void
    {
        if (Schema::hasTable('permissions')) {
            DB::table('permissions')
                ->whereIn('name', [
                    'ViewAny:ProductCategory',
                    'View:ProductCategory',
                    'Create:ProductCategory',
                    'Update:ProductCategory',
                    'Delete:ProductCategory',
                    'Restore:ProductCategory',
                    'ForceDelete:ProductCategory',
                    'ForceDeleteAny:ProductCategory',
                    'RestoreAny:ProductCategory',
                    'Replicate:ProductCategory',
                    'Reorder:ProductCategory',
                ])
                ->delete();

            cache()->forget('spatie.permission.cache');
        }

        Schema::table('products', function (Blueprint $table) {
            $table->dropConstrainedForeignId('product_category_id');
        });

        Schema::dropIfExists('product_categories');
    }
};
