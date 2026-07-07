<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'question_en',
        'answer',
        'answer_en',
        'is_published',
        'order_column',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    /**
     * Get localized question
     */
    public function getQuestionAttribute($value)
    {
        if (app()->getLocale() === 'en' && $this->question_en) {
            return $this->question_en;
        }

        return $value;
    }

    /**
     * Get localized answer
     */
    public function getAnswerAttribute($value)
    {
        if (app()->getLocale() === 'en' && $this->answer_en) {
            return $this->answer_en;
        }

        return $value;
    }
}
