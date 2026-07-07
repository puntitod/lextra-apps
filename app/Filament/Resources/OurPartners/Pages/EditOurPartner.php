<?php

namespace App\Filament\Resources\OurPartners\Pages;

use App\Filament\Resources\OurPartners\OurPartnerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Traits\RedirectsToIndex;

class EditOurPartner extends EditRecord
{
    use RedirectsToIndex;
    protected static string $resource = OurPartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
