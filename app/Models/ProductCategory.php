<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class ProductCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'is_active',
        'sort_order',
        'name_id',
        'name_en',
        'description_id',
        'description_en',
        'thumbnail',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::creating(function (ProductCategory $category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name_id);
            }
        });

        static::updating(function (ProductCategory $category) {
            if ($category->isDirty('name_id') && ! $category->isDirty('slug')) {
                $category->slug = Str::slug($category->name_id);
            }
        });
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function getNameAttribute(): ?string
    {
        if (app()->getLocale() === 'en') {
            return $this->name_en ?: $this->name_id;
        }

        return $this->name_id;
    }

    public function getDescriptionAttribute(): ?string
    {
        if (app()->getLocale() === 'en') {
            return $this->description_en ?: $this->description_id;
        }

        return $this->description_id;
    }
}
