<?php

namespace App\Filament\Resources\Careers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CareerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                Tabs::make('Language')
                    ->columnSpanFull()
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Judul Lowongan (ID)')
                                    ->required()
                                    ->maxLength(200)
                                    ->placeholder('Contoh: Staff Administrasi Proyek')
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    }),

                                RichEditor::make('description')
                                    ->label('Deskripsi Lowongan (ID)')
                                    ->placeholder('Tuliskan deskripsi pekerjaan, kualifikasi, dan benefit...')
                                    ->columnSpanFull(),
                            ]),

                        Tab::make('English')
                            ->schema([
                                TextInput::make('title_en')
                                    ->label('Job Title (EN)')
                                    ->maxLength(200)
                                    ->placeholder('Example: Project Administration Staff'),

                                RichEditor::make('description_en')
                                    ->label('Job Description (EN)')
                                    ->placeholder('Write job description, qualifications, and benefits...')
                                    ->columnSpanFull(),
                            ]),
                    ]),

                TextInput::make('slug')
                    ->label('Slug URL')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->placeholder('Akan terisi otomatis dari Judul Lowongan (ID)')
                    ->columnSpan(1),

                TextInput::make('application_url')
                    ->label('Link Apply Eksternal')
                    ->url()
                    ->maxLength(255)
                    ->placeholder('https://forms.gle/... atau https://wa.me/...')
                    ->helperText('Isi Google Form, WhatsApp link, atau URL pendaftaran lainnya.')
                    ->columnSpan(1),

                FileUpload::make('thumbnail')
                    ->label('Poster Lowongan')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('careers')
                    ->helperText('Gunakan poster portrait agar tampilan card rapi.')
                    ->columnSpanFull(),

                DatePicker::make('open_date')
                    ->label('Tanggal Dibuka')
                    ->native(false)
                    ->columnSpan(1),

                DatePicker::make('close_date')
                    ->label('Tanggal Ditutup')
                    ->native(false)
                    ->afterOrEqual('open_date')
                    ->columnSpan(1),

                Toggle::make('is_active')
                    ->label('Aktif?')
                    ->default(true)
                    ->helperText('Nonaktifkan untuk menyembunyikan lowongan.')
                    ->columnSpan(1),

                TextInput::make('sort_order')
                    ->label('Urutan Tampil')
                    ->numeric()
                    ->default(0)
                    ->helperText('Semakin kecil, semakin di atas.')
                    ->columnSpan(1),
            ]);
    }
}
