<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Site name (BERSIH)
        $siteName = strip_tags(setting('site_name', 'Nama Website'));

        // ===== HERO SECTION =====
        $heroImage = setting_url('hero_image', 'assets-default/about/hero.jpg');
        $heroTitle = setting('hero_title', 'WHO WE ARE');
        $heroText1 = str_replace('{site_name}', $siteName, setting('hero_text_1', ''));
        $heroText2 = setting('hero_text_2', '');

        // Konten
        $aboutText   = strip_tags(setting('about', 'Tidak ada deskripsi'));
        $historyText = setting('history', 'Belum ada sejarah perusahaan.');
        $visionText  = setting('vision', 'Belum ada visi perusahaan.');
        $missionText = setting('mission', 'Belum ada misi perusahaan.');

        // ===== ABOUT COMNAV =====
        $comnavTitle  = setting('about_comnav_title', 'About ComNav');
        $comnavPoint1 = setting('about_comnav_point_1', '');
        $comnavPoint2 = setting('about_comnav_point_2', '');

        // ===== INFRASTRUCTURE =====
        $infraTitle     = setting('infrastructure_title', 'Infrastructure');
        $infraIntro     = setting('infrastructure_intro', '');
        $infraCountries = setting('infrastructure_countries', '');
        $infraClosing   = setting('infrastructure_closing', '');

        // ===== MANAGEMENT =====
        $managementTitle = setting('management_title', 'Our Management');

        // ===== CERTIFICATE =====
        $certificateTitle = setting('certificate_title', 'Our Certificate');

        $rudhi = [
            'name'     => setting('management_rudhi_name', ''),
            'position' => setting('management_rudhi_position', ''),
            'bio'      => setting('management_rudhi_bio', ''),
            'photo'    => 'images/about/rudhi-wibawa.jpg', // path statis (tidak disimpan di DB)
        ];

        $ades = [
            'name'     => setting('management_ades_name', ''),
            'position' => setting('management_ades_position', ''),
            'bio'      => setting('management_ades_bio', ''),
            'photo'    => 'images/about/ades-soleh.jpg', // path statis (tidak disimpan di DB)
        ];

        // ===== TITLE (BERSIH TANPA HTML) =====
        $rawTitle = app()->getLocale() === 'en'
            ? setting('nav_about_en', setting('nav_about', 'About Us'))
            : setting('nav_about', 'Tentang Kami');

        // Bersihkan HTML (WAJIB)
        $title = strip_tags($rawTitle);

        // Full page title (AMAN)
        $pageTitle = $title . ' - ' . $siteName;

        return view('frontend.pages.abouts.index', compact(
            'siteName',
            'title',
            'pageTitle',
            'heroImage',
            'heroTitle',
            'heroText1',
            'heroText2',
            'aboutText',
            'historyText',
            'visionText',
            'missionText',
            'comnavTitle',
            'comnavPoint1',
            'comnavPoint2',
            'infraTitle',
            'infraIntro',
            'infraCountries',
            'infraClosing',
            'managementTitle',
            'rudhi',
            'ades',
            'certificateTitle'
        ));
    }
}