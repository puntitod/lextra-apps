<?php

namespace App\Filament\Resources\ProductCategories\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProductCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                Tabs::make('Language')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('name_id')
                                    ->label('Nama Kategori (ID)')
                                    ->placeholder('Contoh: Kanopi Baja Ringan')
                                    ->required()
                                    ->maxLength(150)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    }),

                                RichEditor::make('description_id')
                                    ->label('Deskripsi Kategori (ID)')
                                    ->placeholder('Tuliskan deskripsi kategori dalam Bahasa Indonesia...')
                                    ->columnSpanFull(),
                            ]),

                        Tab::make('English')
                            ->schema([
                                TextInput::make('name_en')
                                    ->label('Category Name (EN)')
                                    ->placeholder('Example: Lightweight Steel Canopy')
                                    ->maxLength(150)
                                    ->helperText('Opsional. Kosongkan jika sama dengan Bahasa Indonesia.'),

                                RichEditor::make('description_en')
                                    ->label('Category Description (EN)')
                                    ->placeholder('Write category description in English...')
                                    ->helperText('Opsional. Kosongkan jika sama dengan Bahasa Indonesia.')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),

                TextInput::make('slug')
                    ->label('Slug URL')
                    ->placeholder('Akan terisi otomatis dari Nama Kategori (ID)')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->columnSpan(1),

                FileUpload::make('thumbnail')
                    ->label('Thumbnail Kategori')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('product-categories')
                    ->helperText('Gambar utama untuk kartu kategori di halaman produk.')
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Status Kategori')
                    ->default(true)
                    ->helperText('Nonaktifkan untuk menyembunyikan kategori.')
                    ->columnSpan(1),

                TextInput::make('sort_order')
                    ->label('Urutan Tampil')
                    ->numeric()
                    ->default(0)
                    ->placeholder('0')
                    ->helperText('Semakin kecil, semakin di atas.')
                    ->columnSpan(1),
            ]);
    }
}
