<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $siteName  = strip_tags(setting('site_name', 'Nama Website'));
        $title     = 'Partners';
        $pageTitle = $title . ' - ' . $siteName;

        // ===== ARTICLE HERO =====
        $articleTitle  = setting('partner_article_title', '');
        $articleButton = setting('partner_article_button', 'More Details');
        $heroImage     = asset('storage/partners/main.png');

        // ===== SECTION: teks + foto kiri =====
        $sectionTitle = setting('partner_article_section_title', '');
        $para1        = setting('partner_article_para_1', '');
        $para2        = setting('partner_article_para_2', '');
        $para3        = setting('partner_article_para_3', '');
        $tagline      = setting('partner_article_tagline', '');
        $sectionPhoto = asset('storage/partners/critical.png');

        // ===== GRID 4 FOTO =====
        $galleryPhotos = [
            asset('storage/partners/1.png'),
            asset('storage/partners/2.png'),
            asset('storage/partners/3.png'),
            asset('storage/partners/4.png'),
        ];

        // ===== VIDEO =====
        $videoLabel = setting('partner_article_video_label', 'ComNav MS-SAR');
        $videoSrc   = asset('storage/partners/vid.mp4');

        return view('frontend.pages.partners.index', compact(
            'siteName',
            'title',
            'pageTitle',
            'articleTitle',
            'articleButton',
            'heroImage',
            'sectionTitle',
            'para1',
            'para2',
            'para3',
            'tagline',
            'sectionPhoto',
            'galleryPhotos',
            'videoLabel',
            'videoSrc'
        ));
    }
}