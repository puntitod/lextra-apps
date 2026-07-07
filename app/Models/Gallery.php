<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'title_en',
        'description',
        'description_en',
        'thumbnail',
        'images',
        'is_published',
        'tags',
        'tags_en',
        'order_column',
    ];

    protected $casts = [
        'images' => 'array',
        'tags' => 'array',
        'tags_en' => 'array',
        'is_published' => 'boolean',
    ];

    // ================= ACCESSORS (AUTO LOCALE) =================

    public function getTitleAttribute($value)
    {
        if (app()->getLocale() === 'en' && $this->title_en) {
            return $this->title_en;
        }

        return $value;
    }

    public function getDescriptionAttribute($value)
    {
        if (app()->getLocale() === 'en' && $this->description_en) {
            return $this->description_en;
        }

        return $value;
    }

    public function getTagsAttribute($value)
    {
        if (app()->getLocale() === 'en' && $this->tags_en) {
            return $this->tags_en;
        }

        return $value;
    }
}
