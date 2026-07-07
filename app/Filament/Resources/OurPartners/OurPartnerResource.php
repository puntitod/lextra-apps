<?php

namespace App\Filament\Resources\OurPartners;

use App\Filament\Resources\OurPartners\Pages\CreateOurPartner;
use App\Filament\Resources\OurPartners\Pages\EditOurPartner;
use App\Filament\Resources\OurPartners\Pages\ListOurPartners;
use App\Filament\Resources\OurPartners\Schemas\OurPartnerForm;
use App\Filament\Resources\OurPartners\Tables\OurPartnersTable;
use App\Models\OurPartner;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Traits\HasShieldAccess;

class OurPartnerResource extends Resource
{
    use HasShieldAccess;
    protected static ?string $model = OurPartner::class;

    protected static UnitEnum|string|null $navigationGroup = 'Website Content';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Our Partners';

    public static function form(Schema $schema): Schema
    {
        return OurPartnerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OurPartnersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOurPartners::route('/'),
            'create' => CreateOurPartner::route('/create'),
            'edit' => EditOurPartner::route('/{record}/edit'),
        ];
    }
}
