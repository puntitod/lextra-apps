<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([

                /* =====================
                 * LANGUAGE TABS
                 * ===================== */
                Tabs::make('Language')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('name')
                                    ->label('Service Name (ID)')
                                    ->placeholder('Contoh: Pembuatan Website')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    }),

                                RichEditor::make('description')
                                    ->label('Description (ID)')
                                    ->placeholder('Tulis penjelasan lengkap tentang layanan...')
                                    ->columnSpanFull(),
                            ]),

                        Tab::make('English')
                            ->schema([
                                TextInput::make('name_en')
                                    ->label('Service Name (EN)')
                                    ->placeholder('Example: Website Development'),

                                RichEditor::make('description_en')
                                    ->label('Description (EN)')
                                    ->placeholder('Write service description in English...')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),

                /* =====================
                 * SLUG
                 * ===================== */
                TextInput::make('slug')
                    ->label('Slug URL')
                    ->placeholder('Akan terisi otomatis dari nama (ID)')
                    ->required()
                    ->columnSpan(1),

                /* =====================
                 * MEDIA
                 * ===================== */
                FileUpload::make('icon')
                    ->label('Icon')
                    ->directory('services/icons')
                    ->image()
                    ->disk('public')
                    ->helperText('Icon layanan (PNG / SVG).')
                    ->columnSpan(1),

                FileUpload::make('image')
                    ->label('Thumbnail / Featured Image')
                    ->directory('services')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->helperText('Gambar utama layanan.')
                    ->columnSpan(1),

                /* =====================
                 * STATUS & SORT
                 * ===================== */
                Toggle::make('is_active')
                    ->label('Active?')
                    ->default(true)
                    ->helperText('Nonaktifkan untuk menyembunyikan layanan.')
                    ->columnSpan(1),

                TextInput::make('sort_order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->helperText('Semakin kecil, semakin di atas.')
                    ->columnSpan(1),
            ]);
    }
}
