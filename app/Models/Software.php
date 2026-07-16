<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    // Sesuaikan dengan nama tabel di database kamu
    protected $table = 'software';

    // Kolom edited_at bukan updated_at, jadi disable auto timestamps
    public $timestamps = false;

    protected $fillable = [
        'name_en',
        'name_id',
        'images',
        'videos',
        'imaes_catalog', 
    ];

    protected $casts = [
        'images'       => 'array',
        'imaes_catalog' => 'array',
        'videos'       => 'array',
    ];

    // Accessor untuk nama sesuai locale
    public function getNameAttribute(): string
    {
        return app()->getLocale() === 'en' && $this->name_en
            ? $this->name_en
            : ($this->name_id ?? '');
    }

    // Accessor images — pastikan selalu array
    public function getImagesArrayAttribute(): array
    {
        $val = $this->images;
        if (is_array($val)) return $val;
        $decoded = json_decode($val ?? '[]', true);
        return is_array($decoded) ? $decoded : [];
    }

    // Accessor catalog images — pastikan selalu array
    // (nama kolom imaes_catalog sesuai typo di database)
    public function getCatalogImagesArrayAttribute(): array
    {
        $val = $this->imaes_catalog;
        if (is_array($val)) return $val;
        $decoded = json_decode($val ?? '[]', true);
        return is_array($decoded) ? $decoded : [];
    }
}