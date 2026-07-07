<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_category_id',
        'slug',
        'is_active',
        'sort_order',
        'name_id',
        'name_en',
        'headline_id',  
        'headline_en',
        'pdf_file',
        'description_id',
        'description_en',
        'price',
        'sale_price',
        'images',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'images' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    protected static function booted(): void
    {
        static::creating(function (Product $product) {
            if (empty($product->slug)) {
                $product->slug = Str::slug($product->name_id);
            }
        });

        static::updating(function (Product $product) {
            if ($product->isDirty('name_id')) {
                $product->slug = Str::slug($product->name_id);
            }
        });
    }

    public function getThumbnailAttribute(): ?string
    {
        return $this->images[0] ?? null;
    }

    public function getFinalPriceAttribute(): float
    {
        return (float) ($this->sale_price ?? $this->price);
    }

    public function getNameAttribute(): ?string
    {
        return app()->getLocale() === 'en' && $this->name_en
            ? $this->name_en
            : $this->name_id;
    }

    public function getDescriptionAttribute(): ?string
    {
        return app()->getLocale() === 'en' && $this->description_en
            ? $this->description_en
            : $this->description_id;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}