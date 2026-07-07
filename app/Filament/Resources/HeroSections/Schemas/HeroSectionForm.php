<?php

namespace App\Filament\Resources\HeroSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class HeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Language')
                    ->tabs([

                        /* =====================
                         * INDONESIA
                         * ===================== */
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Hero Title (ID)')
                                    ->required()
                                    ->afterStateHydrated(
                                        fn($component, $record) =>
                                        $component->state(
                                            $record?->getRawOriginal('title')
                                        )
                                    ),

                                Textarea::make('description')
                                    ->label('Hero Description (ID)')
                                    ->columnSpanFull()
                                    ->afterStateHydrated(
                                        fn($component, $record) =>
                                        $component->state(
                                            $record?->getRawOriginal('description')
                                        )
                                    ),

                                TextInput::make('button_text')
                                    ->label('Button Text (ID)')
                                    ->afterStateHydrated(
                                        fn($component, $record) =>
                                        $component->state(
                                            $record?->getRawOriginal('button_text')
                                        )
                                    ),
                            ]),

                        /* =====================
                         * ENGLISH
                         * ===================== */
                        Tab::make('English')
                            ->schema([
                                TextInput::make('title_en')
                                    ->label('Hero Title (EN)')
                                    ->afterStateHydrated(
                                        fn($component, $record) =>
                                        $component->state(
                                            $record?->getRawOriginal('title_en')
                                        )
                                    ),

                                Textarea::make('description_en')
                                    ->label('Hero Description (EN)')
                                    ->columnSpanFull()
                                    ->afterStateHydrated(
                                        fn($component, $record) =>
                                        $component->state(
                                            $record?->getRawOriginal('description_en')
                                        )
                                    ),

                                TextInput::make('button_text_en')
                                    ->label('Button Text (EN)')
                                    ->afterStateHydrated(
                                        fn($component, $record) =>
                                        $component->state(
                                            $record?->getRawOriginal('button_text_en')
                                        )
                                    ),
                            ]),
                    ])
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Hero Image')
                    ->image()
                    ->disk('public')
                    ->directory('hero')
                    ->preserveFilenames()
                    ->enableOpen()
                    ->enableDownload()
                    ->columnSpanFull(),

                TextInput::make('button_url')
                    ->label('Button URL'),
            ]);
    }
}
