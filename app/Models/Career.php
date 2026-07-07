<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_en',
        'slug',
        'thumbnail',
        'description',
        'description_en',
        'application_url',
        'open_date',
        'close_date',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'open_date' => 'date',
        'close_date' => 'date',
        'is_active' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::creating(function (Career $career) {
            if (empty($career->slug)) {
                $career->slug = Str::slug($career->title);
            }
        });

        static::updating(function (Career $career) {
            if ($career->isDirty('title') && ! $career->isDirty('slug')) {
                $career->slug = Str::slug($career->title);
            }
        });
    }

    public function scopePublished(Builder $query): Builder
    {
        $today = now()->toDateString();

        return $query
            ->where('is_active', true)
            ->where(function (Builder $q) use ($today) {
                $q->whereNull('open_date')->orWhereDate('open_date', '<=', $today);
            })
            ->where(function (Builder $q) use ($today) {
                $q->whereNull('close_date')->orWhereDate('close_date', '>=', $today);
            });
    }

    public function getLocalizedTitleAttribute(): ?string
    {
        if (app()->getLocale() === 'en' && filled($this->title_en)) {
            return $this->title_en;
        }

        return $this->title;
    }

    public function getLocalizedDescriptionAttribute(): ?string
    {
        if (app()->getLocale() === 'en' && filled($this->description_en)) {
            return $this->description_en;
        }

        return $this->description;
    }
}
