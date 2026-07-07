<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_en',
        'slug',
        'icon',
        'image',
        'description',
        'description_en',
        'is_active',
        'sort_order',
    ];

    /**
     * Auto-generate slug from Indonesian name
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->name);
            }
        });

        static::updating(function ($service) {
            if ($service->isDirty('name') && ! $service->isDirty('slug')) {
                $service->slug = Str::slug($service->name);
            }
        });
    }

    /**
     * Helper: get localized name
     */
    public function getName(): string
    {
        if (app()->getLocale() === 'en') {
            return $this->name_en ?: $this->name;
        }

        return $this->name;
    }

    /**
     * Helper: get localized description
     */
    public function getDescription(): ?string
    {
        if (app()->getLocale() === 'en') {
            return $this->description_en ?: $this->description;
        }

        return $this->description;
    }
}
