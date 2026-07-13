<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\TermConditionController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SoftwareController;


/*
|--------------------------------------------------------------------------
| Language Switcher
|--------------------------------------------------------------------------
*/

// Route::get('/lang/{lang}', function (string $lang) {
//     if (in_array($lang, ['id', 'en'])) {
//         session(['locale' => $lang]);
//     }

//     return back();
// })->name('lang.switch');

Route::get('/lang/{lang}', function (string $lang) {
    if (! in_array($lang, ['id', 'en'])) {
        abort(404);
    }

    session(['locale' => $lang]);

    return redirect()->to(url()->previous());
})->name('lang.switch');

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Contact Messages
Route::post('/', [HomeController::class, 'storeContact'])->name('contact.store');
Route::get('/contact/messages', [ContactMessageController::class, 'index'])->name('contact.messages');
Route::get('/kontak', [ContactMessageController::class, 'create'])->name('contact.form');

// Pages
Route::get('/pages/{slug}', [PageController::class, 'show'])->name('pages.show');
Route::get('/pages', [PageController::class, 'index'])->name('pages.index');
Route::get('/search/pages', [PageController::class, 'search'])->name('pages.search');
Route::get('/search/skeleton', function () {
    return view('frontend.pages.pages.partials.skeleton')->render();
})->name('search.skeleton');

// FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

// Galleries
Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
Route::get('/galleries/{gallery}', [GalleryController::class, 'show'])->name('galleries.show');
Route::get('/search/galleries', [GalleryController::class, 'search'])->name('galleries.search');
Route::get('/search/galleries/skeleton', function () {
    return view('frontend.pages.gallery.partials.skeleton')->render();
})->name('galleries.search.skeleton');

// Abouts
Route::get('/abouts', [AboutController::class, 'index'])->name('abouts.index');

// Term & Privacy
Route::get('/terms-conditions', [TermConditionController::class, 'index'])->name('terms-conditions.index');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy.index');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

// Careers
Route::get('/careers', [CareerController::class, 'index'])->name('careers.index');
Route::get('/search/careers', [CareerController::class, 'search'])->name('careers.search');
Route::get('/careers/{slug}', [CareerController::class, 'show'])->name('careers.show');

// Products
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/search/products', [ProductController::class, 'search'])
    ->name('products.search');

Route::get('/search/products/skeleton', function () {
    return view('frontend.pages.products.partials.skeleton')->render();
})->name('products.search.skeleton');

Route::get('/products/{categorySlug}/{productSlug}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('/products/{categorySlug}', [ProductController::class, 'category'])
    ->name('products.category');

Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');

Route::get('/software', [SoftwareController::class, 'index'])->name('software.index');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show'); // untuk link kartu

// PWA Manifest
Route::get('/manifest.json', function () {
    $logo = setting('logo', 'settings/notion.svg');
    $siteName = setting('site_name', 'Mulaidigital Starter Kit');
    $primaryColor = setting('primary_color', '#facc15');

    return Response::json([
        "name" => $siteName,
        "short_name" => "Mulaidigital",
        "start_url" => "/",
        "display" => "standalone",
        "background_color" => "#ffffff",
        "theme_color" => $primaryColor,
        "orientation" => "portrait",
        "icons" => [
            [
                "src" => "/storage/$logo",
                "sizes" => "192x192",
                "type" => "image/svg+xml"
            ],
            [
                "src" => "/storage/$logo",
                "sizes" => "512x512",
                "type" => "image/svg+xml"
            ]
        ]
    ], 200, [
        'Content-Type' => 'application/manifest+json'
    ]);



});
