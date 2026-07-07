<?php

namespace App\Filament\Resources\OurPartners\Pages;

use App\Filament\Resources\OurPartners\OurPartnerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOurPartners extends ListRecords
{
    protected static string $resource = OurPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
