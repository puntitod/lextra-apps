<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PageForm
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
                    ->columnSpanFull()
                    ->tabs([

                        /* =====================
                         * INDONESIA
                         * ===================== */
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Judul Halaman (ID)')
                                    ->required()
                                    ->maxLength(200)
                                    ->placeholder('Contoh: Tentang Kami')
                                    ->afterStateHydrated(
                                        fn($component, $state) =>
                                        $component->state(
                                            $component->getRecord()?->getRawOriginal('title')
                                        )
                                    )
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                    }),


                                RichEditor::make('content')
                                    ->label('Konten Halaman (ID)')
                                    ->columnSpanFull()
                                    ->afterStateHydrated(
                                        fn($component) =>
                                        $component->state(
                                            $component->getRecord()?->getRawOriginal('content')
                                        )
                                    ),
                            ]),

                        /* =====================
                         * ENGLISH
                         * ===================== */
                        Tab::make('English')
                            ->schema([
                                TextInput::make('title_en')
                                    ->label('Page Title (EN)')
                                    ->maxLength(200)
                                    ->afterStateHydrated(
                                        fn($component) =>
                                        $component->state(
                                            $component->getRecord()?->getRawOriginal('title_en')
                                        )
                                    ),

                                RichEditor::make('content_en')
                                    ->label('Page Content (EN)')
                                    ->columnSpanFull()
                                    ->afterStateHydrated(
                                        fn($component) =>
                                        $component->state(
                                            $component->getRecord()?->getRawOriginal('content_en')
                                        )
                                    ),

                            ]),
                    ]),

                /* =====================
                 * SLUG
                 * ===================== */
                TextInput::make('slug')
                    ->label('Slug URL')
                    ->required()
                    ->placeholder('Akan terisi otomatis dari Judul (ID)')
                    ->columnSpan(1),

                /* =====================
                 * THUMBNAIL
                 * ===================== */
                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->directory('pages')
                    ->disk('public')
                    ->image()
                    ->imageEditor()
                    ->helperText('Thumbnail halaman (opsional).')
                    ->columnSpan(1),

                /* =====================
                 * PUBLISH SETTINGS
                 * ===================== */
                Toggle::make('is_published')
                    ->label('Publish?')
                    ->default(false)
                    ->helperText('Aktifkan agar halaman tampil di website.')
                    ->columnSpan(1),

                DateTimePicker::make('publish_at')
                    ->label('Publish At')
                    ->visible(fn(callable $get) => $get('is_published'))
                    ->helperText('Kosongkan jika ingin publish sekarang.')
                    ->columnSpan(1),
            ]);
    }
}
