<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'message',
        'message_en',
        'rating',
        'photo',
        'status',
        'submitted_at',
        'published_at',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    /**
     * ======================
     * ACCESSORS (BILINGUAL)
     * ======================
     */

    public function getMessageAttribute($value)
    {
        if (app()->getLocale() === 'en' && $this->message_en) {
            return $this->message_en;
        }

        return $value;
    }

    /**
     * ======================
     * HELPERS
     * ======================
     */

    public function isPublished(): bool
    {
        return $this->status === 'published';
    }

    /**
     * ======================
     * SCOPES
     * ======================
     */

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
    
}