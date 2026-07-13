@extends('frontend.layouts.app')

@section(
    'title',
    strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'mulaidigital.com'))
)

@section('content')
<section class="py-10 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-full px-4 sm:px-6 lg:px-8">

        <div id="productGrid">

            @forelse($groupedProducts as $categoryName => $products)

                {{-- Category Heading --}}
                <div class="mb-4 mt-8 first:mt-0 js-fade-up">
                    <h2 class="text-xl sm:text-2xl font-extrabold uppercase tracking-widest
                               border-b border-gray-200 dark:border-zinc-800 pb-2">
                        {{ $categoryName }}
                    </h2>
                </div>

                {{-- Product Cards Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">

                    @foreach($products as $index => $product)

                        @php
    $images = is_array($product->images)
        ? $product->images
        : json_decode($product->images, true);

    $firstImage = is_array($images) && count($images) > 0
        ? $images[0]
        : null;

    $locale = app()->getLocale();

    $productName = $locale === 'en'
        ? ($product->name_en ?? $product->name_id)
        : $product->name_id;

    $fallbackUrl = route('products.show', [
        'categorySlug' => $product->category?->slug ?? 'uncategorized',
        'productSlug'  => $product->slug
    ]);

    // Encode semua gambar ke JSON untuk dikirim ke JS
    $imagesJson = json_encode(
    collect($images ?? [])
        ->map(fn($img) => asset(
            'storage/products/catalog/' . basename($img)
        ))
        ->toArray()
);

$pdfUrl = $product->pdf_file
        ? asset('storage/' . $product->pdf_file)
        : null;
@endphp

<div
    class="group relative overflow-hidden rounded-lg js-product-item cursor-pointer border border-gray-400 dark:border-zinc-700
           transition duration-300 hover:shadow-lg"
    style="animation-delay: {{ $index * 0.05 }}s; aspect-ratio: 16/9;"
    data-images="{{ $imagesJson }}"
    data-label="{{ $productName }}"
    data-fallback="{{ $fallbackUrl }}"
    data-pdf="{{ $pdfUrl }}"
    onclick="handleProductClick(this)">

                            {{-- Gambar penuh --}}
                            @if($firstImage)
                                <img
                                    src="{{ asset('storage/'.$firstImage) }}"
                                    alt="{{ $productName }}"
                                    loading="lazy"
                                    class="absolute inset-0 w-full h-full object-cover
                                           group-hover:scale-105 transition duration-500 border border-gray-400 dark:border-zinc-700">
                            @else
                                <div class="absolute inset-0 bg-zinc-200 dark:bg-zinc-800
                                            flex items-center justify-center">
                                    <svg class="w-12 h-12 text-gray-400" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1.5"
                                              d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2
                                                 l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01
                                                 M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2
                                                 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            @endif

                            {{-- Ring highlight saat card aktif --}}
                            <div class="product-active-ring absolute inset-0 rounded-lg
                                        ring-0 ring-[#0B5C8C] transition-all duration-300
                                        pointer-events-none"></div>

                            {{-- Overlay biru bawah --}}
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 z-10
                                        w-[80%] bg-[#0B5C8C]/85 rounded-t-2xl
                                        px-4 py-3 text-center transition duration-300
                                        group-hover:bg-[#0B5C8C]/95">

                                <h3 class="text-white font-extrabold uppercase
                                           text-xs sm:text-sm leading-tight tracking-wide mb-2">
                                    {{ $productName }}
                                </h3>

                                <span class="inline-flex items-center justify-center
                                             bg-white hover:bg-[#0B5C8C]
                                             text-[#0B5C8C] hover:text-white
                                             border border-white
                                             text-[9px] sm:text-[10px] font-bold uppercase tracking-widest
                                             px-4 py-1 rounded-full transition duration-300">
                                    {{ $readMoreText }}
                                </span>

                            </div>

                        </div>

                    @endforeach

                </div>

            @empty
                <div class="text-center py-16">
                    <p class="text-zinc-500 dark:text-zinc-400 text-sm">No products found.</p>
                </div>
            @endforelse

        </div>

    </div>
</section>


{{-- ===================== IMAGE VIEWER SECTION ===================== --}}
<section id="pdfViewerSection"
         class="bg-gray-50 dark:bg-zinc-900 py-16 hidden">
    <div class="max-w-5xl mx-auto px-6 sm:px-10">

        {{-- Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center
                    justify-between gap-4 mb-6">

            {{-- Judul produk --}}
            <div class="flex items-center gap-4">
                <div class="w-1 h-8 bg-[#0B5C8C] rounded-full flex-shrink-0"></div>
                <h2 id="pdfViewerLabel"
                    class="font-extrabold text-xl md:text-2xl text-zinc-900
                           dark:text-zinc-100 uppercase tracking-wide">
                    —
                </h2>
            </div>

            {{-- Tombol-tombol aksi --}}
            <div class="flex items-center gap-2 flex-shrink-0">

                {{-- 1. Tombol Download Gambar --}}
                <button id="downloadImageBtn"
                        onclick="downloadCurrentImage()"
                        class="inline-flex items-center gap-1.5
                               bg-white hover:bg-gray-50
                               dark:bg-zinc-700 dark:hover:bg-zinc-600
                               text-zinc-700 dark:text-zinc-200
                               border border-gray-300 dark:border-zinc-600
                               text-xs font-bold uppercase tracking-wide
                               px-4 py-2 rounded-lg transition duration-300">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2.5"
                              d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1
                                 m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download
                </button>

                {{-- 2. Tombol View PDF (dari database pdf_file) --}}
                <a id="viewPdfBtn"
                   href="#"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="hidden inline-flex items-center gap-1.5
                          bg-[#0B5C8C] hover:bg-[#094a72]
                          text-white
                          text-xs font-bold uppercase tracking-wide
                          px-4 py-2 rounded-lg transition duration-300">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586
                                 a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2
                                 0 01-2 2z"/>
                    </svg>
                    View PDF
                </a>

                {{-- 3. Tombol Tutup --}}
                <button onclick="closePdfViewer()"
                        class="inline-flex items-center gap-1.5
                               bg-red-500 hover:bg-red-600
                               text-white
                               text-xs font-bold uppercase tracking-wide
                               px-4 py-2 rounded-lg transition duration-300">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                    Close
                </button>

            </div>

        </div>

        {{-- Main Image --}}
        <div class="relative bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden
                    border border-gray-200 dark:border-zinc-700 shadow-lg mb-4">

            <img id="mainProductImage"
                 src=""
                 alt=""
                 class="w-full object-contain max-h-[100vh]">

            {{-- Prev Button --}}
            <button id="imgPrev"
                    onclick="changeImage(-1)"
                    class="hidden absolute left-3 top-1/2 -translate-y-1/2
                           w-10 h-10 rounded-full bg-black/40 hover:bg-black/60
                           text-white items-center justify-center
                           transition duration-300">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>

            {{-- Next Button --}}
            <button id="imgNext"
                    onclick="changeImage(1)"
                    class="hidden absolute right-3 top-1/2 -translate-y-1/2
                           w-10 h-10 rounded-full bg-black/40 hover:bg-black/60
                           text-white items-center justify-center
                           transition duration-300">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2.5" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

        </div>

        {{-- Thumbnail Strip --}}
        <div id="thumbnailStrip" class="hidden gap-2 mt-2"></div>

    </div>
</section>


<!-- {{-- ===================== PDF CATALOGUE SECTION ===================== --}}
<section id="pdfCatalogueSection" class="bg-gray-50 dark:bg-zinc-900 py-16">
    <div class="max-w-7xl mx-auto px-6 sm:px-10">

        {{-- Heading --}}
        <div class="flex items-center gap-5 mb-10 js-fade-up">
            <div class="flex-1 h-px bg-gray-300 dark:bg-zinc-700"></div>
            <h2 class="text-center font-extrabold text-2xl md:text-3xl
                       text-zinc-900 dark:text-zinc-100 uppercase tracking-wide
                       whitespace-nowrap">
                Product Catalogue
            </h2>
            <div class="flex-1 h-px bg-gray-300 dark:bg-zinc-700"></div>
        </div>

        @php
            $pdfs = [
                ['file' => asset('storage/products/catalog1.pdf'), 'label' => 'MS-SAR5000 Catalogue'],
                ['file' => asset('storage/products/catalog2.pdf'), 'label' => 'MS-SAR1000 Catalogue'],
                ['file' => asset('storage/products/catalog3.pdf'), 'label' => 'SinoGNSS Jupiter Catalogue'],
                ['file' => asset('storage/products/catalog4.pdf'), 'label' => 'SinoGNSS Mars Pro Catalogue'],
                ['file' => asset('storage/products/catalog5.pdf'), 'label' => 'T20 PALM GNSS Catalogue'],
                ['file' => asset('storage/products/catalog6.pdf'), 'label' => 'Product Catalogue 2025'],
            ];
            $pdfChunks = array_chunk($pdfs, 2);
        @endphp

        <div class="relative" id="pdfSlider">
            <div class="overflow-hidden">
                <div id="pdfTrack" class="flex transition-transform duration-700 ease-in-out">

                    @foreach($pdfChunks as $chunkIndex => $chunk)
                        <div class="min-w-full min-h-full">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                                @foreach($chunk as $j => $pdf)
                                    <div class="bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden
                                                border border-gray-200 dark:border-zinc-700
                                                shadow-sm hover:shadow-lg transition duration-300
                                                js-pdf-card"
                                         style="animation-delay: {{ $j * 0.1 }}s;">

                                        <div class="relative bg-gray-100 dark:bg-zinc-700"
                                             style="height: 380px;">
                                            <iframe
                                                src="{{ $pdf['file'] }}#toolbar=0&navpanes=0&scrollbar=0&view=FitH&page=1"
                                                class="w-full h-full border-0 rounded-t-2xl"
                                                loading="lazy"
                                                title="{{ $pdf['label'] }}">
                                            </iframe>
                                            <div class="absolute inset-0 cursor-default"></div>
                                        </div>

                                        <div class="px-4 py-3 flex items-center justify-between gap-2
                                                    border-t border-gray-100 dark:border-zinc-700">
                                            <div class="flex items-center gap-2 min-w-0">
                                                <svg class="w-4 h-4 text-[#0B5C8C] flex-shrink-0"
                                                     fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2
                                                             2 0 002-2V8l-6-6zm-1 1.5L18.5 9H13V3.5zM6
                                                             20V4h5v7h7v9H6z"/>
                                                </svg>
                                                <span class="text-xs font-semibold text-zinc-700
                                                             dark:text-zinc-200 truncate">
                                                    {{ $pdf['label'] }}
                                                </span>
                                            </div>
                                            <a href="{{ $pdf['file'] }}"
                                               target="_blank" rel="noopener noreferrer"
                                               class="flex-shrink-0 inline-flex items-center gap-1
                                                      bg-[#0B5C8C] hover:bg-[#094a72]
                                                      text-white text-[10px] font-bold uppercase
                                                      tracking-wide px-3 py-1.5 rounded-lg
                                                      transition duration-300">
                                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2.5"
                                                          d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1
                                                             m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                                </svg>
                                                Download
                                            </a>
                                        </div>

                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            @if(count($pdfChunks) > 1)
                <button id="pdfPrev"
                        class="absolute left-0 top-[190px] -translate-x-5
                               w-10 h-10 rounded-full bg-white dark:bg-zinc-800
                               border border-gray-200 dark:border-zinc-700 shadow-md
                               flex items-center justify-center
                               hover:bg-[#0B5C8C] hover:text-white hover:border-[#0B5C8C]
                               text-zinc-600 dark:text-zinc-300 transition duration-300 z-10">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button id="pdfNext"
                        class="absolute right-0 top-[190px] translate-x-5
                               w-10 h-10 rounded-full bg-white dark:bg-zinc-800
                               border border-gray-200 dark:border-zinc-700 shadow-md
                               flex items-center justify-center
                               hover:bg-[#0B5C8C] hover:text-white hover:border-[#0B5C8C]
                               text-zinc-600 dark:text-zinc-300 transition duration-300 z-10">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2.5" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            @endif

            <div id="pdfDots" class="flex justify-center gap-2 mt-6"></div>

        </div>

    </div>
</section> -->

@push('scripts')
<script>
let currentImages     = [];
let currentImageIndex = 0;
let currentPdfUrl     = null;

function handleProductClick(el) {
    const imagesRaw = el.dataset.images;
    const label     = el.dataset.label;
    const fallback  = el.dataset.fallback;
    const pdfUrl    = el.dataset.pdf || null;

    let images = [];
    try { images = JSON.parse(imagesRaw); } catch(e) { images = []; }

    if (!images || images.length === 0) {
        window.location.href = fallback;
        return;
    }

    // Highlight card aktif
    document.querySelectorAll('.product-active-ring').forEach(r => {
        r.style.boxShadow = 'none';
        r.style.opacity   = '0';
    });
    const ring = el.querySelector('.product-active-ring');
    if (ring) {
        ring.style.boxShadow = '0 0 0 3px #0B5C8C';
        ring.style.opacity   = '1';
    }

    // Set state
    currentImages      = images;
    currentImageIndex  = 0;
    currentPdfUrl      = pdfUrl;

    // Update label
    const labelEl = document.getElementById('pdfViewerLabel');
    if (labelEl) labelEl.textContent = label;

    // Update tombol View PDF
    const viewPdfBtn = document.getElementById('viewPdfBtn');
    if (viewPdfBtn) {
        if (pdfUrl) {
            viewPdfBtn.href = pdfUrl;
            viewPdfBtn.classList.remove('hidden');
            viewPdfBtn.classList.add('inline-flex');
        } else {
            viewPdfBtn.classList.add('hidden');
            viewPdfBtn.classList.remove('inline-flex');
        }
    }

    // Tampilkan gambar pertama
    showImage(0);
    buildThumbnails();

    // Nav prev/next
    const imgPrev = document.getElementById('imgPrev');
    const imgNext = document.getElementById('imgNext');
    if (images.length > 1) {
        imgPrev?.classList.remove('hidden');
        imgPrev?.classList.add('flex');
        imgNext?.classList.remove('hidden');
        imgNext?.classList.add('flex');
    } else {
        imgPrev?.classList.add('hidden');
        imgPrev?.classList.remove('flex');
        imgNext?.classList.add('hidden');
        imgNext?.classList.remove('flex');
    }

    // Tampilkan viewer
    const viewerSection    = document.getElementById('pdfViewerSection');
    const catalogueSection = document.getElementById('pdfCatalogueSection');
    if (viewerSection)    viewerSection.classList.remove('hidden');
    if (catalogueSection) catalogueSection.classList.add('hidden');

    setTimeout(() => {
        viewerSection?.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }, 100);
}

function showImage(index) {
    currentImageIndex = index;
    const mainImg = document.getElementById('mainProductImage');
    if (mainImg) {
        mainImg.src = currentImages[index];
        mainImg.alt = document.getElementById('pdfViewerLabel')?.textContent || '';
    }
    document.querySelectorAll('.thumb-item').forEach((t, i) => {
        t.classList.toggle('ring-2',          i === index);
        t.classList.toggle('ring-[#0B5C8C]', i === index);
        t.classList.toggle('opacity-100',     i === index);
        t.classList.toggle('opacity-50',      i !== index);
    });
}

function changeImage(dir) {
    if (!currentImages.length) return;
    showImage((currentImageIndex + dir + currentImages.length) % currentImages.length);
}

function buildThumbnails() {
    const strip = document.getElementById('thumbnailStrip');
    if (!strip) return;
    strip.innerHTML = '';

    if (currentImages.length <= 1) {
        strip.classList.add('hidden');
        return;
    }

    strip.classList.remove('hidden');
    strip.className = 'grid gap-2 mt-4';
    const cols = Math.min(currentImages.length, 6);
    strip.style.gridTemplateColumns = `repeat(${cols}, minmax(0, 1fr))`;

    currentImages.forEach((img, i) => {
        const div = document.createElement('div');
        div.className = `thumb-item cursor-pointer rounded-lg overflow-hidden
                         border-2 border-transparent transition duration-200
                         ${i === 0 ? 'ring-2 ring-[#0B5C8C] opacity-100' : 'opacity-50'}`;
        div.onclick = () => showImage(i);

        const imgEl = document.createElement('img');
        imgEl.src       = img;
        imgEl.className = 'w-full aspect-square object-cover hover:opacity-100 transition';
        div.appendChild(imgEl);
        strip.appendChild(div);
    });
}

// ── Download gambar yang sedang ditampilkan ──
function downloadCurrentImage() {
    if (!currentImages.length) return;

    const url      = currentImages[currentImageIndex];
    const label    = document.getElementById('pdfViewerLabel')?.textContent || 'image';
    const ext      = url.split('.').pop().split('?')[0] || 'jpg';
    const filename = label.toLowerCase().replace(/\s+/g, '-') + '-' + (currentImageIndex + 1) + '.' + ext;

    // Fetch gambar lalu trigger download
    fetch(url)
        .then(res => res.blob())
        .then(blob => {
            const a    = document.createElement('a');
            a.href     = URL.createObjectURL(blob);
            a.download = filename;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(a.href);
        })
        .catch(() => {
            // Fallback: buka di tab baru kalau fetch gagal (cross-origin)
            window.open(url, '_blank');
        });
}

function closePdfViewer() {
    const viewerSection    = document.getElementById('pdfViewerSection');
    const catalogueSection = document.getElementById('pdfCatalogueSection');
    const mainImg          = document.getElementById('mainProductImage');

    if (mainImg) mainImg.src = '';
    currentImages      = [];
    currentImageIndex  = 0;
    currentPdfUrl      = null;

    if (viewerSection)    viewerSection.classList.add('hidden');
    if (catalogueSection) catalogueSection.classList.remove('hidden');

    document.querySelectorAll('.product-active-ring').forEach(r => {
        r.style.boxShadow = 'none';
        r.style.opacity   = '0';
    });

    document.getElementById('productGrid')
        ?.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

document.addEventListener("DOMContentLoaded", () => {

    // ── Intersection Observer ──
    const animTargets = document.querySelectorAll('.js-product-item, .js-fade-up, .js-pdf-card');
    if (animTargets.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('is-visible');
                    void entry.target.offsetWidth;
                    entry.target.classList.add('is-visible');
                } else {
                    entry.target.classList.remove('is-visible');
                }
            });
        }, { threshold: 0.15 });
        animTargets.forEach((el) => observer.observe(el));
    }

});
</script>
@endpush
@endsection