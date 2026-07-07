<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Page extends Model
{
    protected $fillable = [
        'title',
        'title_en',
        'slug',
        'thumbnail',
        'content',
        'content_en',
        'is_published',
        'publish_at',
        'created_by',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'publish_at' => 'datetime',
    ];

    /**
     * ======================
     * RELATION
     * ======================
     */
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * ======================
     * MULTI LANGUAGE ACCESSOR
     * ======================
     */

    public function getTitleAttribute(): ?string
    {
        $locale = app()->getLocale();

        if ($locale === 'en' && filled($this->attributes['title_en'] ?? null)) {
            return $this->attributes['title_en'];
        }

        return $this->attributes['title']
            ?? $this->attributes['title_en']
            ?? null;
    }

    public function getContentAttribute(): ?string
    {
        $locale = app()->getLocale();

        if ($locale === 'en' && filled($this->attributes['content_en'] ?? null)) {
            return $this->attributes['content_en'];
        }

        return $this->attributes['content']
            ?? $this->attributes['content_en']
            ?? null;
    }
}
