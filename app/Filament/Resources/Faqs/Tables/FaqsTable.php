<?php

namespace App\Filament\Resources\Faqs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FaqsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // ================= QUESTION ID (RAW DB) =================
                TextColumn::make('question')
                    ->label('Question (ID)')
                    ->searchable()
                    ->wrap()
                    ->getStateUsing(
                        fn($record) => $record->getRawOriginal('question')
                    ),

                // ================= QUESTION EN =================
                TextColumn::make('question_en')
                    ->label('Question (EN)')
                    ->searchable()
                    ->wrap()
                    ->placeholder('—')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->getStateUsing(
                        fn($record) => $record->getRawOriginal('question_en')
                    ),

                // ================= STATUS =================
                IconColumn::make('is_published')
                    ->label('Published')
                    ->boolean(),

                // ================= ORDER =================
                TextColumn::make('order_column')
                    ->label('Order')
                    ->numeric()
                    ->sortable(),

                // ================= TIMESTAMPS =================
                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Updated')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
