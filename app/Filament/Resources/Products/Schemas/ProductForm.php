<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Forms\Components\RichEditor;



class ProductForm
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

                        // =====================
                        // INDONESIA
                        // =====================
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('name_id')
                                    ->label('Nama Produk (ID)')
                                    ->placeholder('Contoh: Pempek Kapal Selam')
                                    ->required()
                                    ->maxLength(150)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    }),

                                RichEditor::make('description_id')
                                    ->label('Deskripsi Produk (ID)')
                                    ->placeholder('Tuliskan deskripsi produk dalam Bahasa Indonesia...')
                                    ->columnSpanFull(),
                            ]),

                        // =====================
                        // ENGLISH
                        // =====================
                        Tab::make('English')
                            ->schema([
                                TextInput::make('name_en')
                                    ->label('Product Name (EN)')
                                    ->placeholder('Example: Submarine Pempek')
                                    ->maxLength(150)
                                    ->helperText('Opsional. Kosongkan jika sama dengan Bahasa Indonesia.'),

                                RichEditor::make('description_en')
                                    ->label('Product Description (EN)')
                                    ->placeholder('Write product description in English...')
                                    ->helperText('Opsional. Kosongkan jika sama dengan Bahasa Indonesia.')
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),

                /* =====================
                 * SLUG
                 * ===================== */
                TextInput::make('slug')
                    ->label('Slug URL')
                    ->placeholder('Akan terisi otomatis dari Nama Produk (ID)')
                    ->required()
                    ->columnSpan(1),

                Select::make('product_category_id')
                    ->label('Kategori Produk')
                    ->relationship('category', 'name_id')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->helperText('Pilih kategori supaya produk tampil di halaman kategori frontend.')
                    ->columnSpan(1),

                /* =====================
                 * PRICING
                 * ===================== */
                TextInput::make('price')
                    ->label('Harga Normal')
                    ->numeric()
                    ->required()
                    ->default(0)
                    ->prefix('Rp')
                    ->placeholder('15000')
                    ->helperText('Harga normal produk sebelum promo.')
                    ->columnSpan(1),

                TextInput::make('sale_price')
                    ->label('Harga Promo')
                    ->numeric()
                    ->prefix('Rp')
                    ->placeholder('12000')
                    ->helperText('Opsional. Isi jika produk sedang promo.')
                    ->columnSpan(1),

                /* =====================
 * IMAGES
 * ===================== */
                FileUpload::make('images')
                    ->label('Gambar Produk')
                    ->multiple()
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('products')
                    ->helperText('Upload satu atau beberapa gambar produk.')
                    ->columnSpanFull(),

                /* =====================
                 * STATUS & SORT
                 * ===================== */
                Toggle::make('is_active')
                    ->label('Status Produk')
                    ->default(true)
                    ->helperText('Nonaktifkan untuk menyembunyikan produk.')
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
