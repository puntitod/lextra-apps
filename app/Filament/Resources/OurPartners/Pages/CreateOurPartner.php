<?php

namespace App\Filament\Resources\OurPartners\Pages;

use App\Filament\Resources\OurPartners\OurPartnerResource;
use Filament\Resources\Pages\CreateRecord;
use App\Traits\RedirectsToIndex;

class CreateOurPartner extends CreateRecord
{
    use RedirectsToIndex;
    protected static string $resource = OurPartnerResource::class;
}
