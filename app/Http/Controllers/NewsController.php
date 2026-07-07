<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $siteName = strip_tags(setting('site_name', 'Nama Website'));
        $pageTitle = strip_tags(setting('news_page_title', 'News & Highlight')) . ' - ' . $siteName;

        // ===== HEADING =====
        $newsHighlightHeading = setting('news_highlight_heading', 'NEWS AND HIGHLIGHT');

        // ===== GRID KARTU BERITA (manual/statis) =====
        // Ganti title, slug, dan nama file gambar sesuai konten kamu.
        // Tambah atau kurangi item sesuai kebutuhan (kelipatan 2 supaya grid rapi).
        $newsCards = [
            [
                'title' => 'BRIN\'s Integrated Geological Platform Ready to Support Exploration and Disaster Mitigation',
                'slug' => 'brin-integrated-geological-platform',
                'image' => asset('storage/news/1.jpg'),
                'link' => 'https://brin.go.id/orkm/posts/kabar/platform-geologi-terintegrasi-brin-siap-dukung-eksplorasi-dan-mitigasi-bencana',  
            ],
            [
                'title' => 'Operational Performance Test of the MS-SAR5000 PT. Insani Bara Perkasa, Samarinda, Kalimantan Timur.',
                'slug' => 'ms-sar5000-performance-test',
                'image' => asset('storage/news/2.png'),
                'link' => route('news.show', 'ms-sar5000-performance-test'),
            ],
            [
                'title' => 'Big news! We officially opening a new branch in Malang!',
                'slug' => 'new-branch-malang',
                'image' => asset('storage/news/3.jpg'),
                'link' => 'https://instagram.com/p/contoh',  
            ],
            [
                'title' => 'Meet the SV600 — the future of hydrographic survey is unmanned.',
                'slug' => 'sv600-hydrographic-survey',
                'image' => asset('storage/news/4.jpg'),
                'link' => route('news.show', 'sv600-hydrographic-survey'),
            ],
            [
                'title' => 'The SinoGNSS Jupiter Laser RTK doesn\'t just measure, it sees what you\'re measuring',
                'slug' => 'sinognss-jupiter-laser-rtk',
                'image' => asset('storage/news/5.jpg'),
                'link' => 'https://sinognss.com/jupiter',
            ],
            [
                'title' => 'The SinoGNSS Mars Pro Laser RTK hits the sweet spot that serious surveyors actually need',
                'slug' => 'sinognss-mars-pro-laser-rtk',
                'image' => asset('storage/news/6.jpg'),
                'link' => 'https://sinognss.com/mars-pro',
            ],

        ];

        // ===== FEATURED ARTICLE =====
        $featuredTitle = setting('news_featured_title', '');
        $featuredBody = setting('news_featured_body', '');
        $featuredSourceLabel = setting('news_featured_source_label', 'News source:');
        $featuredSourceUrl = setting('news_featured_source_url', '');
        $readMoreLabel = setting('news_read_more_label', 'READ MORE');

        // Foto untuk featured article — ganti nama file sesuai yang kamu upload
        $featuredImage = asset('storage/news/brin.jpg');

        return view('frontend.pages.news.index', compact(
            'siteName',
            'pageTitle',
            'newsHighlightHeading',
            'newsCards',
            'featuredTitle',
            'featuredBody',
            'featuredSourceLabel',
            'featuredSourceUrl',
            'readMoreLabel',
            'featuredImage'
        ));
    }
}