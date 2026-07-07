<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('settings')->insert([
            ['key' => 'address', 'value' => 'Jl. Raya No. 123, Bandung', 'type' => 'text'],
            ['key' => 'phone_number', 'value' => '022-1234567', 'type' => 'text'],
            ['key' => 'whatsapp_number', 'value' => '6281234567890', 'type' => 'text'],
            ['key' => 'email', 'value' => 'info@mulaisigigital.com', 'type' => 'text', 'updated_at' => Carbon::create(2025, 11, 6, 8, 53, 30)],
            ['key' => 'facebook', 'value' => 'https://facebook.com/yourpage', 'type' => 'text'],
            ['key' => 'instagram', 'value' => 'https://instagram.com/yourpage', 'type' => 'text'],
            ['key' => 'tiktok', 'value' => 'https://tiktok.com/@yourpage', 'type' => 'text'],
            ['key' => 'youtube', 'value' => 'https://youtube.com/yourchannel', 'type' => 'text'],
            ['key' => 'site_name', 'value' => 'Nama Website Kamu', 'type' => 'text'],
            ['key' => 'tagline', 'value' => 'Tagline perusahaan kamu', 'type' => 'text'],
            ['key' => 'google_maps_link', 'value' => 'https://maps.google.com/?q=-6.123,107.123', 'type' => 'text'],
            ['key' => 'latitude', 'value' => '-6.123456', 'type' => 'text'],
            ['key' => 'longitude', 'value' => '107.123456', 'type' => 'text'],
            ['key' => 'open_hours_weekday', 'value' => '09:00 - 21:00', 'type' => 'text'],
            ['key' => 'open_hours_weekend', 'value' => '10:00 - 22:00', 'type' => 'text'],
            ['key' => 'logo', 'value' => 'settings/notion.svg', 'type' => 'image', 'updated_at' => Carbon::create(2025, 11, 6, 14, 9, 12)],
            ['key' => 'primary_color', 'value' => '#2196F3', 'type' => 'text'],
            ['key' => 'secondary_color', 'value' => '#FFC107', 'type' => 'text'],
            ['key' => 'footer_text', 'value' => '© 2025 Nama Perusahaan. All rights reserved.', 'type' => 'text'],
            ['key' => 'privacy_policy_url', 'value' => '/privacy-policy', 'type' => 'text'],
            ['key' => 'terms_and_conditions_url', 'value' => '/terms-and-conditions', 'type' => 'text'],
            ['key' => 'favicon', 'value' => 'settings/figma.svg', 'type' => 'image', 'created_at' => Carbon::create(2025, 11, 6, 13, 54, 36), 'updated_at' => Carbon::create(2025, 11, 6, 13, 56, 17)],
        ]);
    }
}
