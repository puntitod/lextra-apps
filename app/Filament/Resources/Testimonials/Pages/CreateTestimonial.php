<?php

namespace App\Filament\Resources\Testimonials\Pages;

use App\Filament\Resources\Testimonials\TestimonialResource;
use Filament\Resources\Pages\CreateRecord;
use App\Traits\RedirectsToIndex;

class CreateTestimonial extends CreateRecord
{
    use RedirectsToIndex;
    protected static string $resource = TestimonialResource::class;

}
