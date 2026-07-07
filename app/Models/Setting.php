<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'type',
        'category', // ✅ TAMBAHAN
    ];

    protected $casts = [
        'value' => 'array',
    ];

    protected static function cacheKey(string $key): string
    {
        return "setting_{$key}";
    }

    protected static function booted(): void
    {
        static::deleting(function (Setting $setting) {

            if (in_array($setting->key, [
                'primary_color',
                'warning_color',
            ])) {

                Notification::make()
                    ->title('Aksi Ditolak')
                    ->body('Setting ini bersifat sistem dan tidak boleh dihapus.')
                    ->danger()
                    ->send();

                return false;
            }

            cache()->forget(self::cacheKey($setting->key));
        });

        static::saved(function (Setting $setting) {
            cache()->forget(self::cacheKey($setting->key));
        });
    }

    /**
     * ===== QUERY HELPER (BARU) =====
     */
    public function scopeCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    /**
     * ===== GET / SET (TIDAK DIUBAH) =====
     */
    public static function get(string $key, $default = null): mixed
    {
        return cache()->rememberForever(
            self::cacheKey($key),
            fn () => static::where('key', $key)->value('value') ?? $default
        );
    }

    public static function set(
        string $key,
        $value,
        string $type = 'text',
        string $category = 'general' // ✅ TAMBAHAN
    ): void {
        $normalizedValue = match ($type) {
            'text' => is_array($value)
                ? $value
                : ['id' => $value, 'en' => $value],

            'image', 'video' => is_array($value)
                ? $value
                : ['path' => $value],

            'color' => is_array($value)
                ? $value
                : ['color' => $value],

            default => $value,
        };

        static::updateOrCreate(
            ['key' => $key],
            [
                'value'    => $normalizedValue,
                'type'     => $type,
                'category' => $category,
            ]
        );

        cache()->forget(self::cacheKey($key));
    }

    /**
     * ===== VIEW HELPERS (TIDAK DIUBAH) =====
     */
    public static function text(string $key, string $lang = 'id', $default = null): mixed
    {
        $value = static::get($key, []);

        return is_array($value)
            ? ($value[$lang] ?? $default)
            : $default;
    }

    public static function file(string $key, $default = null): mixed
    {
        $value = static::get($key, []);

        return is_array($value)
            ? ($value['path'] ?? $default)
            : $default;
    }

    public static function color(string $key, $default = null): mixed
    {
        $value = static::get($key, []);

        return is_array($value)
            ? ($value['color'] ?? $default)
            : $default;
    }
}
