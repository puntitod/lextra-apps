<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([

            // ================= LANGUAGE TABS =================
            Tabs::make('Language')
                ->tabs([

                    // ===== INDONESIA =====
                    Tab::make('Indonesia')
                        ->schema([

                            TextInput::make('title')
                                ->label('Judul (ID)')
                                ->placeholder('Masukkan judul gallery')
                                ->helperText('Judul gallery dalam Bahasa Indonesia.')
                                ->required()
                                ->maxLength(255)
                                ->formatStateUsing(
                                    fn($state, $record) =>
                                    $record?->getRawOriginal('title')
                                ),

                            Textarea::make('description')
                                ->label('Deskripsi (ID)')
                                ->placeholder('Masukkan deskripsi gallery')
                                ->helperText('Deskripsi gallery dalam Bahasa Indonesia.')
                                ->columnSpanFull()
                                ->formatStateUsing(
                                    fn($state, $record) =>
                                    $record?->getRawOriginal('description')
                                ),

                            TagsInput::make('tags')
                                ->label('Tags (ID)')
                                ->placeholder('Tambah tag…')
                                ->helperText('Tags Bahasa Indonesia.')
                                ->formatStateUsing(function ($state, $record) {
                                    if (! $record) {
                                        return [];
                                    }

                                    $raw = $record->getRawOriginal('tags');

                                    if (is_array($raw)) {
                                        return $raw;
                                    }

                                    if (is_string($raw)) {
                                        return json_decode($raw, true) ?: [];
                                    }

                                    return [];
                                })
                                ->dehydrateStateUsing(fn($state) => array_values($state ?? []))
                                ->columnSpanFull(),

                        ]),

                    // ===== ENGLISH =====
                    Tab::make('English')
                        ->schema([

                            TextInput::make('title_en')
                                ->label('Title (EN)')
                                ->placeholder('Enter gallery title')
                                ->maxLength(255)
                                ->formatStateUsing(
                                    fn($state, $record) =>
                                    $record?->getRawOriginal('title_en')
                                ),

                            Textarea::make('description_en')
                                ->label('Description (EN)')
                                ->placeholder('Enter gallery description')
                                ->columnSpanFull()
                                ->formatStateUsing(
                                    fn($state, $record) =>
                                    $record?->getRawOriginal('description_en')
                                ),

                            TagsInput::make('tags_en')
                                ->label('Tags (EN)')
                                ->placeholder('Add tag…')
                                ->helperText('English tags.')
                                ->formatStateUsing(function ($state, $record) {
                                    if (! $record) {
                                        return [];
                                    }

                                    $raw = $record->getRawOriginal('tags_en');

                                    if (is_array($raw)) {
                                        return $raw;
                                    }

                                    if (is_string($raw)) {
                                        return json_decode($raw, true) ?: [];
                                    }

                                    return [];
                                })
                                ->dehydrateStateUsing(fn($state) => array_values($state ?? []))
                                ->columnSpanFull(),

                        ]),
                ])
                ->columnSpanFull(),

            // ================= MEDIA =================
            FileUpload::make('thumbnail')
                ->label('Thumbnail')
                ->image()
                ->disk('public')
                ->directory('galleries/thumbnails')
                ->helperText('Thumbnail / cover gallery.')
                ->imageEditor()
                ->maxSize(2048),

            FileUpload::make('images')
                ->label('Foto Gallery')
                ->image()
                ->disk('public')
                ->directory('galleries/images')
                ->multiple()
                ->reorderable()
                ->appendFiles()
                ->helperText('Unggah beberapa gambar gallery.')
                ->maxSize(5048)
                ->columnSpanFull(),

            // ================= SETTINGS =================
            Toggle::make('is_published')
                ->label('Publish?')
                ->helperText('Jika aktif, gallery tampil di halaman publik.')
                ->default(false),

            TextInput::make('order_column')
                ->label('Urutan')
                ->placeholder('0')
                ->helperText('Semakin kecil, semakin atas posisinya.')
                ->numeric()
                ->default(0)
                ->required(),
        ]);
    }
}
