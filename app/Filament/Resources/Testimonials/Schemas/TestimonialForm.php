<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(120),

                Textarea::make('message')
                    ->label('Isi Testimoni')
                    ->required()
                    ->maxLength(2000)
                    ->columnSpanFull(),

                Select::make('rating')
                    ->label('Rating')
                    ->options([
                        1 => '⭐',
                        2 => '⭐⭐',
                        3 => '⭐⭐⭐',
                        4 => '⭐⭐⭐⭐',
                        5 => '⭐⭐⭐⭐⭐',
                    ])
                    ->required()
                    ->placeholder('Pilih rating'),

                Select::make('status')
                    ->label('Status')
                    ->options([
                        'pending' => 'Pending',
                        'published' => 'Published',
                        'non_active' => 'Non Active',
                    ])
                    ->default('pending')
                    ->required(),

                DateTimePicker::make('submitted_at')
                    ->label('Dikirim Pada')
                    ->disabled()
                    ->helperText('Otomatis terisi ketika pengunjung mengirimkan testimoni.'),

                DateTimePicker::make('published_at')
                    ->label('Dipublikasikan Pada')
                    ->visible(fn(callable $get) => $get('status') === 'published'),
            ]);
    }
}
