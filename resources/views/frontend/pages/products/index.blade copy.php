@extends('frontend.layouts.app')

@section(
    'title',
    strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'mulaidigital.com'))
)

@section('content')
<section class="py-16 sm:py-20 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-full px-4 sm:px-6 lg:px-8">

        {{-- Product Grid --}}
<div id="productGrid" class="grid grid-cols-1 md:grid-cols-2 gap-5 sm:gap-6">

    @forelse($products as $index => $product)

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

            $productHeadline = $locale === 'en'
                ? ($product->headline_en ?? $product->headline_id ?? '')
                : ($product->headline_id ?? '');

            $productDescription = $locale === 'en'
                ? ($product->description_en ?? $product->description_id)
                : $product->description_id;
        @endphp

        <div
            class="relative rounded-2xl overflow-hidden border border-gray-200 
            dark:border-zinc-800 
            shadow-sm hover:shadow-xl transition duration-300 group
                   h-[200px] sm:h-[240px] bg-zinc-200 
                   js-product-item" 
                   style="animation-delay: {{ $index * 0.1 }}s;"> 
                   
                   {{-- Foto produk: full memenuhi card --}}
            @if($firstImage)
                <img
                    src="{{ asset('storage/'.$firstImage) }}"
                    alt="{{ $productName }}"
                    loading="lazy"
                    class="absolute inset-0 w-full h-full object-cover
                           group-hover:scale-105 transition duration-500">
            @else
                <div class="absolute inset-0 flex items-center justify-center
                            text-zinc-400 text-sm bg-zinc-100">
                    No Image
                </div>
            @endif

            {{-- Kotak biru rounded kanan (overlay kiri) — design asli dipertahankan --}}
            <div class="absolute top-1/2 left-0 -translate-y-1/2
                        w-[55%] sm:w-[50%]
                        bg-[#0B5C8C]/95
                        rounded-r-2xl
                        px-5 py-4
                        shadow-lg">

                {{-- Label kecil: nama produk (misal: MS-SAR5000) --}}
                <span class="block text-white/80 text-[13px] font-semibold
                             uppercase tracking-widest mb-1">
                    {{ $productName }}
                </span>

                {{-- Headline besar (misal: REAL-TIME SLOPE STABILITY INTELLIGENCE) --}}
                @if($productHeadline)
                    <h3 class="text-white font-extrabold uppercase leading-tight
                               text-sm sm:text-base md:text-lg mb-1">
                        {{ $productHeadline }}
                    </h3>
                @endif

                {{-- Deskripsi singkat --}}
                <p class="text-white/85 text-xs sm:text-[13px]
                          leading-snug line-clamp-2 mb-3">
                    {{ Str::limit(strip_tags($productDescription), 90) }}
                </p>
                
                    {{-- Tombol More Details --}}
@if($product->pdf_file)
    {{-- Kalau ada PDF → buka PDF langsung --}}
    <a href="{{ asset('storage/' . $product->pdf_file) }}"
       target="_blank"
       rel="noopener noreferrer"
       class="inline-block bg-white
              hover:bg-white/90 transition duration-300
              hover:text-[#0B5C8C]
              text-[10px] sm:text-xs font-semibold
              uppercase tracking-wide px-3 py-1.5 rounded-md
              border border-white/60">
        More Details
    </a>
@else
    {{-- Kalau tidak ada PDF → arahkan ke halaman detail produk --}}
    <a href="{{ route('products.show', [
        'categorySlug' => $product->category?->slug ?? 'uncategorized',
        'productSlug'  => $product->slug
    ]) }}"
       class="inline-block bg-white
              hover:bg-white/90 transition duration-300
              hover:text-[#0B5C8C]
              text-[10px] sm:text-xs font-semibold
              uppercase tracking-wide px-3 py-1.5 rounded-md
              border border-white/60">
        More Details
    </a>
@endif

            </div>

        </div>

    @empty

        <div class="col-span-full text-center py-16">
            <p class="text-zinc-500 dark:text-zinc-400 text-sm sm:text-base">
                No products found.
            </p>
        </div>

    @endforelse

</div>
</section>


{{-- ===================== PDF CATALOGUE SECTION ===================== --}}
<section class="bg-gray-50 dark:bg-zinc-900 py-16">
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
                [
                    'file'  => asset('storage/products/catalog1.pdf'),
                    'label' => 'MS-SAR5000 Catalogue',
                ],
                [
                    'file'  => asset('storage/products/catalog2.pdf'),
                    'label' => 'MS-SAR1000 Catalogue',
                ],
                [
                    'file'  => asset('storage/products/catalog3.pdf'),
                    'label' => 'SinoGNSS Jupiter Catalogue',
                ],
                [
                    'file'  => asset('storage/products/catalog4.pdf'),
                    'label' => 'SinoGNSS Mars Pro Catalogue',
                ],
                [
                    'file'  => asset('storage/products/catalog5.pdf'),
                    'label' => 'T20 PALM GNSS Catalogue',
                ],
                [
                    'file'  => asset('storage/products/catalog5.pdf'),
                    'label' => 'T20 PALM GNSS Catalogue',
                ],
            ];

            // Bagi jadi grup ? per slide
            $pdfChunks = array_chunk($pdfs, 2);
        @endphp

        {{-- Slider Wrapper --}}
        <div class="relative" id="pdfSlider">

            {{-- Slides Container --}}
            <div class="overflow-hidden">
                <div id="pdfTrack"
                     class="flex transition-transform duration-700 ease-in-out">

                    @foreach($pdfChunks as $chunkIndex => $chunk)
                        <div class="min-w-full min-h-full">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">

                                @foreach($chunk as $j => $pdf)
                                    <div class="bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden
                                                border border-gray-200 dark:border-zinc-700
                                                shadow-sm hover:shadow-lg transition duration-300
                                                js-pdf-card"
                                         style="animation-delay: {{ $j * 0.1 }}s;">

                                        {{-- PDF iframe Preview --}}
                                        <div class="relative bg-gray-100 dark:bg-zinc-700"
                                             style="height: 380px;">

                                            <iframe
                                                src="{{ $pdf['file'] }}#toolbar=0&navpanes=0&scrollbar=0&view=FitH&page=1"
                                                class="w-full h-full border-0 rounded-t-2xl"
                                                loading="lazy"
                                                title="{{ $pdf['label'] }}">
                                            </iframe>

                                            {{-- Invisible overlay supaya klik card tidak masuk ke iframe
                                                 — klik download lewat tombol di bawah --}}
                                            <div class="absolute inset-0 cursor-default"></div>

                                        </div>

                                        {{-- Footer --}}
                                        <div class="px-4 py-3 flex items-center justify-between gap-2
                                                    border-t border-gray-100 dark:border-zinc-700">

                                            {{-- Label --}}
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

                                            {{-- Tombol Download --}}
                                            <a href="{{ $pdf['file'] }}"
                                               target="_blank"
                                               rel="noopener noreferrer"
                                               class="flex-shrink-0 inline-flex items-center gap-1
                                                      bg-[#0B5C8C] hover:bg-[#094a72]
                                                      text-white text-[10px] font-bold uppercase
                                                      tracking-wide px-3 py-1.5 rounded-lg
                                                      transition duration-300">
                                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                                     stroke="currentColor">
                                                    <path stroke-linecap="round"
                                                          stroke-linejoin="round"
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

            {{-- Nav Buttons --}}
            @if(count($pdfChunks) > 1)
                <button id="pdfPrev"
                        class="absolute left-0 top-[190px] -translate-x-5
                               w-10 h-10 rounded-full bg-white dark:bg-zinc-800
                               border border-gray-200 dark:border-zinc-700
                               shadow-md flex items-center justify-center
                               hover:bg-[#0B5C8C] hover:text-white hover:border-[#0B5C8C]
                               text-zinc-600 dark:text-zinc-300
                               transition duration-300 z-10">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2.5" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <button id="pdfNext"
                        class="absolute right-0 top-[190px] translate-x-5
                               w-10 h-10 rounded-full bg-white dark:bg-zinc-800
                               border border-gray-200 dark:border-zinc-700
                               shadow-md flex items-center justify-center
                               hover:bg-[#0B5C8C] hover:text-white hover:border-[#0B5C8C]
                               text-zinc-600 dark:text-zinc-300
                               transition duration-300 z-10">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2.5" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            @endif

            {{-- Dots --}}
            <div id="pdfDots" class="flex justify-center gap-2 mt-6"></div>

        </div>

    </div>
</section>

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {

    // ── PDF Slider ──
    const track  = document.getElementById('pdfTrack');
    const slides = track ? track.querySelectorAll(':scope > div') : [];
    const dots   = document.getElementById('pdfDots');
    let current  = 0;
    let autoTimer;

    if (slides.length > 0 && dots) {

        // Buat dots
        slides.forEach((_, i) => {
            const dot = document.createElement('button');
            dot.className = i === 0
                ? 'w-6 h-2.5 rounded-full bg-[#0B5C8C] transition-all duration-300'
                : 'w-2.5 h-2.5 rounded-full bg-gray-300 dark:bg-zinc-600 transition-all duration-300';
            dot.onclick = () => moveTo(i);
            dots.appendChild(dot);
        });

        function updateDots() {
            [...dots.children].forEach((d, i) => {
                d.className = i === current
                    ? 'w-6 h-2.5 rounded-full bg-[#0B5C8C] transition-all duration-300'
                    : 'w-2.5 h-2.5 rounded-full bg-gray-300 dark:bg-zinc-600 transition-all duration-300';
            });
        }

        function moveTo(i) {
            current = i;
            track.style.transform = `translateX(-${current * 100}%)`;
            updateDots();
            resetAuto();
        }

        function resetAuto() {
            clearInterval(autoTimer);
            autoTimer = setInterval(() => {
                moveTo((current + 1) % slides.length);
            }, 5000);
        }

        document.getElementById('pdfNext')?.addEventListener('click', () => {
            moveTo((current + 1) % slides.length);
        });

        document.getElementById('pdfPrev')?.addEventListener('click', () => {
            moveTo((current - 1 + slides.length) % slides.length);
        });

        // Sembunyikan tombol nav kalau hanya 1 slide
        if (slides.length <= 1) {
            document.getElementById('pdfPrev')?.classList.add('hidden');
            document.getElementById('pdfNext')?.classList.add('hidden');
            dots.classList.add('hidden');
        }

        resetAuto();
    }

    // ── Intersection Observer animasi ──
    const animTargets = document.querySelectorAll(
        '.js-product-item, .js-spec-header, .js-spec-img, ' +
        '.js-spec-row, .js-adv-heading, .js-adv-item, .js-fade-up, .js-pdf-card'
    );

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

    // ── Search logic ──
    const searchInput       = document.getElementById('searchInput');
    const productGrid       = document.getElementById('productGrid');
    const paginationWrapper = document.getElementById('paginationWrapper');
    let timeout = null;
    let activeRequestId = 0;

    if (!searchInput) return;

    searchInput.addEventListener('keyup', () => {
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            const requestId = ++activeRequestId;
            const params = new URLSearchParams({
                keyword: searchInput.value.trim(),
                category: searchInput.dataset.category,
            });

            fetch(`{{ route('products.search.skeleton') }}`)
                .then(r => r.text())
                .then(html => {
                    if (requestId !== activeRequestId) return;
                    productGrid.innerHTML = html;
                    paginationWrapper.innerHTML = '';
                });

            fetch(`{{ route('products.search') }}?${params.toString()}`)
                .then(r => r.json())
                .then(data => {
                    if (requestId !== activeRequestId) return;
                    productGrid.innerHTML = data.html ?? '';
                    paginationWrapper.innerHTML = data.pagination ?? '';
                })
                .catch(() => {
                    if (requestId !== activeRequestId) return;
                    productGrid.innerHTML =
                        '<p class="col-span-full text-center text-zinc-500">Failed to load products.</p>';
                    paginationWrapper.innerHTML = '';
                });
        }, 300);
    });
});

    document.addEventListener("DOMContentLoaded", () => {
        const searchInput = document.getElementById('searchInput');
        const productGrid = document.getElementById('productGrid');
        const paginationWrapper = document.getElementById('paginationWrapper');
        let timeout = null;
        let activeRequestId = 0;

        // ── Intersection Observer untuk semua animasi ──
        const animTargets = document.querySelectorAll(
            '.js-product-item, .js-spec-header, .js-spec-img, ' +
            '.js-spec-row, .js-adv-heading, .js-adv-item, .js-pagination'
        );

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

        // ── Search logic (tetap sama seperti aslinya) ──
        if (!searchInput) return;

        searchInput.addEventListener('keyup', () => {
            clearTimeout(timeout);

            timeout = setTimeout(() => {
                const requestId = ++activeRequestId;
                const params = new URLSearchParams({
                    keyword: searchInput.value.trim(),
                    category: searchInput.dataset.category,
                });

                fetch(`{{ route('products.search.skeleton') }}`)
                    .then(response => response.text())
                    .then(html => {
                        if (requestId !== activeRequestId) return;
                        productGrid.innerHTML = html;
                        paginationWrapper.innerHTML = '';
                    });

                fetch(`{{ route('products.search') }}?${params.toString()}`)
                    .then(response => response.json())
                    .then(data => {
                        if (requestId !== activeRequestId) return;
                        productGrid.innerHTML = data.html ?? '';
                        paginationWrapper.innerHTML = data.pagination ?? '';
                    })
                    .catch(() => {
                        if (requestId !== activeRequestId) return;
                        productGrid.innerHTML = '<p class="col-span-full text-center text-zinc-500">Failed to load products.</p>';
                        paginationWrapper.innerHTML = '';
                    });
            }, 300);
        });
    });
</script>
@endpush

@endsection