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
        
        $partnersBadge    = setting('partners_badge', 'Kemitraan & Kepercayaan');
        $partnersTitle    = setting('partners_title', 'Mitra & Klien Kami');
        $partnersSubtitle = setting('partners_subtitle', '');

        // ===== SECTION HEADINGS =====
        $principalHeading = setting('partners_principal_heading', 'Principal Partners');
        $principalEmpty   = setting('partners_principal_empty', 'Belum ada data principal partner.');

        $clientsHeading = setting('partners_clients_heading', 'Our Clients');
        $clientsEmpty   = setting('partners_clients_empty', 'Belum ada data klien.');

        $principals = [
            ['name' => 'COMMNAV',       'logo' => asset('storage/partners/cs.png')],
            ['name' => 'Waskita Karya', 'logo' => asset('storage/partners/bpn.png')],
            ['name' => 'Nindya Karya',  'logo' => asset('storage/partners/isi.png')],
            ['name' => 'ID Food',       'logo' => asset('storage/partners/pertaabi.png')],
            ['name' => 'BCA',           'logo' => asset('storage/partners/rain.jpg')],
            ['name' => 'Nindya Karya',  'logo' => asset('storage/partners/telkom.png')],
            
        ];

        $clients = [
            ['name' => 'Waskita Karya', 'logo' => asset('storage/partners/bpn.png')],
            ['name' => 'Nindya Karya',  'logo' => asset('storage/partners/isi.png')],
            ['name' => 'ID Food',       'logo' => asset('storage/partners/pertaabi.png')],
            ['name' => 'BCA',           'logo' => asset('storage/partners/rain.jpg')],
            ['name' => 'Nindya Karya',  'logo' => asset('storage/partners/telkom.png')],
        ];

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
            'videoSrc',

            'title',
            'pageTitle',
            'partnersBadge',
            'partnersTitle',
            'partnersSubtitle',
            'principalHeading',
            'principalEmpty',
            'clientsHeading',
            'clientsEmpty',
            'principals',
            'clients'
        ));
    }
}