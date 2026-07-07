<?php

namespace App\Filament\Resources\HeroSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                /* =====================
                 * IMAGE
                 * ===================== */
                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->height(56)
                    ->circular(),

                /* =====================
                 * TITLE ID (RAW)
                 * ===================== */
                TextColumn::make('title')
                    ->label('Title (ID)')
                    ->searchable()
                    ->wrap()
                    ->getStateUsing(
                        fn($record) => $record->getRawOriginal('title')
                    ),

                /* =====================
                 * TITLE EN (RAW)
                 * ===================== */
                TextColumn::make('title_en')
                    ->label('Title (EN)')
                    ->wrap()
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->getStateUsing(
                        fn($record) => $record->getRawOriginal('title_en')
                    ),

                /* =====================
                 * BUTTON TEXT ID (RAW)
                 * ===================== */
                TextColumn::make('button_text')
                    ->label('Button (ID)')
                    ->searchable()
                    ->wrap()
                    ->getStateUsing(
                        fn($record) => $record->getRawOriginal('button_text')
                    ),

                /* =====================
                 * BUTTON TEXT EN (RAW)
                 * ===================== */
                TextColumn::make('button_text_en')
                    ->label('Button (EN)')
                    ->wrap()
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->getStateUsing(
                        fn($record) => $record->getRawOriginal('button_text_en')
                    ),

                /* =====================
                 * URL
                 * ===================== */
                TextColumn::make('button_url')
                    ->label('URL')
                    ->limit(30)
                    ->copyable()
                    ->tooltip(fn($record) => $record->button_url),

                /* =====================
                 * META
                 * ===================== */
                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                /* =====================
                 * EN STATUS BADGE
                 * ===================== */
                TextColumn::make('en_status')
                    ->label('EN')
                    ->badge()
                    ->getStateUsing(
                        fn($record) =>
                        filled($record->getRawOriginal('title_en'))
                            ? 'READY'
                            : 'EMPTY'
                    )
                    ->colors([
                        'success' => 'READY',
                        'warning' => 'EMPTY',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
