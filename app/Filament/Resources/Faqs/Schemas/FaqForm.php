<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('Language')
                    ->tabs([
                        Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('question')
                                    ->label('Question (ID)')
                                    ->required()
                                    ->maxLength(255)
                                    ->formatStateUsing(
                                        fn($state, $record) =>
                                        $record?->getRawOriginal('question')
                                    ),

                                Textarea::make('answer')
                                    ->label('Answer (ID)')
                                    ->required()
                                    ->columnSpanFull()
                                    ->formatStateUsing(
                                        fn($state, $record) =>
                                        $record?->getRawOriginal('answer')
                                    ),
                            ]),

                        Tab::make('English')
                            ->schema([
                                TextInput::make('question_en')
                                    ->label('Question (EN)')
                                    ->maxLength(255)
                                    ->formatStateUsing(
                                        fn($state, $record) =>
                                        $record?->getRawOriginal('question_en')
                                    ),

                                Textarea::make('answer_en')
                                    ->label('Answer (EN)')
                                    ->columnSpanFull()
                                    ->formatStateUsing(
                                        fn($state, $record) =>
                                        $record?->getRawOriginal('answer_en')
                                    ),

                            ]),
                    ])
                    ->columnSpanFull(),

                Toggle::make('is_published')
                    ->label('Published')
                    ->default(true),

                TextInput::make('order_column')
                    ->label('Order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
