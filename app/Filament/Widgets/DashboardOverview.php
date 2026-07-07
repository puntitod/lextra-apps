<?php

namespace App\Filament\Widgets;

use App\Models\ContactMessage;
use App\Models\Faq;
use App\Models\HeroSection;
use App\Models\Page;
use App\Models\Testimonial;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $isEn = app()->getLocale() === 'en';

        return [
            Stat::make(
                $isEn ? 'Total Blogs' : 'Total Blog',
                Page::count()
            )
                ->description(
                    $isEn ? 'Number of blog articles' : 'Jumlah artikel blog'
                )
                ->icon('heroicon-o-document-text'),

            Stat::make(
                $isEn ? 'Total Users' : 'Total Pengguna',
                User::count()
            )
                ->description(
                    $isEn ? 'Registered users count' : 'Jumlah pengguna terdaftar'
                )
                ->icon('heroicon-o-users'),

            Stat::make(
                $isEn ? 'Total Messages' : 'Total Pesan',
                ContactMessage::count()
            )
                ->description(
                    $isEn ? 'Incoming messages' : 'Jumlah pesan masuk'
                )
                ->icon('heroicon-o-envelope'),

            Stat::make(
                $isEn ? 'Total FAQs' : 'Total FAQ',
                Faq::count()
            )
                ->description(
                    $isEn ? 'Frequently asked questions' : 'Jumlah pertanyaan'
                )
                ->icon('heroicon-o-question-mark-circle'),

            Stat::make(
                $isEn ? 'Total Testimonials' : 'Total Testimoni',
                Testimonial::count()
            )
                ->description(
                    $isEn ? 'Customer testimonials' : 'Jumlah testimoni pelanggan'
                )
                ->icon('heroicon-o-chat-bubble-left-ellipsis'),

            Stat::make(
                $isEn ? 'Total Hero Sections' : 'Total Hero Section',
                HeroSection::count()
            )
                ->description(
                    $isEn ? 'Active hero sections' : 'Jumlah hero section aktif'
                )
                ->icon('heroicon-o-photo'),
        ];
    }
}
