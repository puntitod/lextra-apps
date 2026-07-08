<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'title',
        'title_en',
        'description',
        'description_en',
        'sub_description',
        'sub_description_en',
        'image',
        'button_text',
        'button_text_en',
        'button_url',
    ];

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

    public function getSubDescriptionAttribute($value)
    {
        if (app()->getLocale() === 'en' && $this->sub_description_en) {
            return $this->sub_description_en;
        }

        return $value;
    }

    public function getButtonTextAttribute($value)
    {
        if (app()->getLocale() === 'en' && $this->button_text_en) {
            return $this->button_text_en;
        }

        return $value;
    }
}
