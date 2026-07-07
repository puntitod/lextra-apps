<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerControllerLama extends Controller
{
    public function index()
    {
        $siteName = strip_tags(setting('site_name', 'Nama Website'));
        $title    = 'Our Partners';
        $pageTitle = $title . ' - ' . $siteName;

        // ===== HEADER TEXT =====
        $partnersBadge    = setting('partners_badge', 'Kemitraan & Kepercayaan');
        $partnersTitle    = setting('partners_title', 'Mitra & Klien Kami');
        $partnersSubtitle = setting('partners_subtitle', '');

        // ===== SECTION HEADINGS =====
        $principalHeading = setting('partners_principal_heading', 'Principal Partners');
        $principalEmpty   = setting('partners_principal_empty', 'Belum ada data principal partner.');

        $clientsHeading = setting('partners_clients_heading', 'Our Clients');
        $clientsEmpty   = setting('partners_clients_empty', 'Belum ada data klien.');

        /*
         * Sementara data masih statis di sini.
         * Kalau nanti mau dipindah ke database (tabel `partners`
         * dengan kolom: name, logo, type [principal/client], sort_order),
         * tinggal ganti 2 baris ini dengan query, contoh:
         *
         * $principals = Partner::where('type', 'principal')->orderBy('sort_order')->get()
         *      ->map(fn ($p) => ['name' => $p->name, 'logo' => asset('storage/'.$p->logo)]);
         *
         * $clients = Partner::where('type', 'client')->orderBy('sort_order')->get()
         *      ->map(fn ($p) => ['name' => $p->name, 'logo' => asset('storage/'.$p->logo)]);
         */

        $principals = [
            ['name' => 'COMMNAV',               'logo' => asset('storage/partners/cs.png')],
            
        ];

        $clients = [
            ['name' => 'Waskita Karya', 'logo' => asset('storage/partners/bpn.png')],
            ['name' => 'Nindya Karya',  'logo' => asset('storage/partners/isi.png')],
            ['name' => 'ID Food',       'logo' => asset('storage/partners/pertaabi.png')],
            ['name' => 'BCA',           'logo' => asset('storage/partners/rain.jpg')],
            ['name' => 'Nindya Karya',  'logo' => asset('storage/partners/telkom.png')],
        ];

        return view('frontend.pages.partners.index', compact(
            'siteName',
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