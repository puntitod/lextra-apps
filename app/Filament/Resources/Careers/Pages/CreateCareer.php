<?php

namespace App\Filament\Resources\Careers\Pages;

use App\Filament\Resources\Careers\CareerResource;
use App\Traits\RedirectsToIndex;
use Filament\Resources\Pages\CreateRecord;

class CreateCareer extends CreateRecord
{
    use RedirectsToIndex;

    protected static string $resource = CareerResource::class;
}
