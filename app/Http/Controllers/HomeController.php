<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use App\Models\Page;
use App\Models\Testimonial;
use App\Models\ContactMessage;
use App\Models\Service;
use App\Models\Product;
use App\Models\OurPartner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $heroes = HeroSection::all();

        $pages = Page::where('is_published', true)
            ->whereNotNull('publish_at')
            ->orderByDesc('publish_at')
            ->take(3)
            ->get();

        // Title homepage - fixed dan support multilingual
        $title = app()->getLocale() === 'en'
            ? 'Home'
            : 'Beranda';

        $testimonials = Testimonial::published()
        ->orderByRaw('COALESCE(published_at, created_at) DESC')
        ->take(4)
        ->get();

        $services = Service::where('is_active', true)->get();

        $products = Product::active()
            ->orderBy('sort_order')
            ->latest()
            ->take(6)
            ->get();

        $partners = OurPartner::where('is_active', true)
            ->orderBy('order')
            ->take(5)
            ->get();

        // ===== INTRO / HERO BANNER SECTION (di bawah hero slider) =====
        // Gambar TIDAK diambil dari database — cukup ganti manual di sini
        // kalau mau update foto, tinggal ganti nama filenya saja.
        $introImage = asset('storage/hero/test5.png');

        // Judul & deskripsi tetap dari settings, biar tetap bisa diubah via admin
        $introTitle = setting('home_hero_title', 'PT. Lextera Survey Indonesia');
        $introSubtitle = setting('home_hero_subtitle', '');
        $introText  = setting('home_hero_text', '');
        

        // ===== WHY LEXTERA SECTION =====
        $whyLexteraTitle = setting('why_lextera_title', 'Why Lextera?');

        // Icon TIDAK disimpan di database — urutan icon tetap di sini,
        // judul/teksnya saja yang diambil dari settings (array sesuai urutan icon).
        $whyLexteraIcons = [
            'box',
            'gear-wrench',
            'badge-plus',
            'chat',
            'theodolite',
            'building',
            'bulb',
            'globe-search',
        ];

        $whyLexteraTitles = setting('why_lextera_reasons', [
            'Equipment Sales & Distribution',
            'Technical Support & After Sales Service',
            'Calibration, Inspection & Instrument Certification',
            'Consulting & Project Advisory',
            'Rental & Leasing of Survey Equipment',
            'Government & Institutional Project Support',
            'Training & Knowledge Transfer',
            'Survey, GIS & Mapping, Geospatial Data Solutions',
        ]);

        // Gabungkan icon (statis di kode) dengan title (dinamis dari database)
        $reasons = collect($whyLexteraIcons)
            ->map(fn ($icon, $index) => [
                'icon'  => $icon,
                'title' => $whyLexteraTitles[$index] ?? '',
            ])
            ->toArray();

        // ===== OUR MANAGEMENT SECTION =====
        // Teks (nama, posisi, bio) pakai key yang sama dengan halaman About,
        // jadi cukup diisi sekali lewat admin dan tampil konsisten di kedua halaman.
        $managementTitle = setting('management_title', 'Our Management');

        // Foto TIDAK diambil dari database — ganti manual di sini kalau perlu.
        $managements = [
            [
                'name'     => setting('management_rudhi_name', 'IR. Rudhi Wibawa Nugraha'),
                'position' => setting('management_rudhi_position', 'President Director'),
                'bio'      => setting('management_rudhi_bio', ''),
                'photo'    => asset('storage/management/rudhi.jpeg'),
            ],
            [
                'name'     => setting('management_ades_name', 'IR. Ades T. Soleh'),
                'position' => setting('management_ades_position', 'Operational Director'),
                'bio'      => setting('management_ades_bio', ''),
                'photo'    => asset('storage/management/ades.jpeg'),
            ],
        ];

        return view('frontend.pages.home.index', compact(
            'heroes',
            'pages',
            'title',          // ← ini yang dipakai di blade
            'testimonials',
            'services',
            'products',
            'partners',
            'introImage',
            'introTitle',
            'introSubtitle',
            'introText',
            'whyLexteraTitle',
            'reasons',
            'managementTitle',
            'managements'
        ));
    }

    public function storeContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'whatsapp_number' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'subject' => 'nullable|string|max:150',
            'message' => 'required|string|max:1000',
        ]);

        ContactMessage::create($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih, pesan Anda telah berhasil dikirim.',
            ], 200);
        }

        return redirect()
            ->to(route('home') . '#form')
            ->with('success', 'Terima kasih, pesan Anda telah berhasil dikirim.');
    }
}