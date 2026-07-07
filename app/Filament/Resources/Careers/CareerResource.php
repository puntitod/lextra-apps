<?php

namespace App\Filament\Resources\Careers;

use App\Filament\Resources\Careers\Pages\CreateCareer;
use App\Filament\Resources\Careers\Pages\EditCareer;
use App\Filament\Resources\Careers\Pages\ListCareers;
use App\Filament\Resources\Careers\Schemas\CareerForm;
use App\Filament\Resources\Careers\Tables\CareersTable;
use App\Models\Career;
use App\Traits\HasShieldAccess;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class CareerResource extends Resource
{
    use HasShieldAccess;

    protected static ?string $model = Career::class;
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-identification';
    protected static UnitEnum|string|null $navigationGroup = 'Website Content';
    protected static ?string $navigationLabel = 'Careers';

    public static function form(Schema $schema): Schema
    {
        return CareerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CareersTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCareers::route('/'),
            'create' => CreateCareer::route('/create'),
            'edit' => EditCareer::route('/{record}/edit'),
        ];
    }
}
