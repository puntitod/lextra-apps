@extends('frontend.layouts.app')

@section(
    'title',
    strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'mulaidigital.com'))
)

@section('content')
<section class="py-16 sm:py-20 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-full px-4 sm:px-6 lg:px-8">

        {{-- Product Grid --}}
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


<section class="bg-white dark:bg-zinc-950 py-20">

    @php
        $pdfs = [
            asset('storage/products/catalog1.pdf'),
            asset('storage/products/catalog2.pdf'),
            asset('storage/products/catalog3.pdf'),
            asset('storage/products/catalog4.pdf'),
            asset('storage/products/catalog5.pdf'),
        ];
    @endphp

        <div class="relative overflow-hidden">

            <div id="pdfTrack" class="flex transition-transform duration-700">

                @foreach($pdfs as $pdf)

                    <div class="min-w-full">

                        <a href="{{ $pdf }}" target="_blank">

                            <canvas
                                class="pdf-preview max-w-full max-h-full flex bg-white"
                                data-pdf="{{ $pdf }}">
                            </canvas>

                        </a>

                    </div>

                @endforeach

            </div>

            <button id="prev"
                class="absolute left-5 top-1/2 -translate-y-1/2
                w-12 h-12 rounded-full bg-black/40 text-white">
                &#10094;
            </button>

            <button id="next"
                class="absolute right-5 top-1/2 -translate-y-1/2
                w-12 h-12 rounded-full bg-black/40 text-white">
                &#10095;
            </button>

            <div id="dots"
                class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-3">
            </div>

        </div>

    </div>

</section>

<!-- {{-- ===================== SPECIFICATIONS SECTION ===================== --}}
<section class="bg-white dark:bg-zinc-950">

    {{-- Header Specifications --}}
    <div class="bg-[#0B5C8C] py-6 text-center js-spec-header">
        <h2 class="text-white font-extrabold text-2xl md:text-3xl tracking-wide uppercase">
            MS - SAR5000
        </h2>
        <p class="text-white font-extrabold text-2xl md:text-3xl tracking-wide uppercase">
            SPECIFICATIONS
        </p>
    </div>

    {{-- Spec Content --}}
    <div class="mx-auto max-w-6xl px-6 sm:px-10 py-14 mb-10">
        <div class="flex flex-col md:flex-row items-stretch gap-10">

            {{-- Gambar Produk --}}
            <div class="w-full md:w-[60%] shrink-0 js-spec-img">
                <div class="h-full rounded-lg overflow-hidden">
                    <img
                        src="{{ asset('storage/products/ms-sar.jpg') }}"
                        alt="MS-SAR5000"
                        class="w-full h-full object-cover">
                </div>
            </div>

            {{-- Tabel Spesifikasi --}}
            <div class="w-full md:flex-1">
                <table class="w-full h-full text-sm sm:text-base">
                    <tbody>
                        @foreach([
                            ['label' => 'Range',               'value' => '50m – 5 km'],
                            ['label' => 'Accuracy',            'value' => '≤0.1 mm'],
                            ['label' => 'Distance Resolution', 'value' => '≤0.2 meter'],
                            ['label' => 'Angular Resolution',  'value' => '≤5 mrad'],
                            ['label' => 'Coverage',            'value' => '360° horizontal'],
                            ['label' => 'Update Rate',         'value' => '≤1 menit'],
                            ['label' => 'Power Consumption',   'value' => '≤40 W'],
                            ['label' => 'IP Rating',           'value' => 'IP65'],
                        ] as $specIndex => $spec)
                        <tr class="border-b border-zinc-100 dark:border-zinc-800 js-spec-row"
                            style="animation-delay: {{ $specIndex * 0.07 }}s;">
                            <td class="py-3 pr-6 text-right font-bold
                                       text-zinc-800 dark:text-zinc-200 w-1/2">
                                {{ $spec['label'] }}
                            </td>
                            <td class="py-3 text-zinc-600 dark:text-zinc-400">
                                {{ $spec['value'] }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</section>

{{-- ===================== KEY ADVANTAGES SECTION ===================== --}}
<section class="bg-white dark:bg-zinc-950 pb-20">
    <div class="w-full px-6 sm:px-10">

        <h2 class="text-center font-extrabold text-2xl md:text-3xl
                   text-zinc-900 dark:text-zinc-100 mb-12 tracking-wide uppercase
                   js-adv-heading">
            Key Advantages
        </h2>

        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-12 gap-y-10">

            {{-- Item 1 --}}
            <div class="flex items-start gap-5 js-adv-item" style="animation-delay: 0s;">
                <div class="shrink-0 w-16 h-16 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('storage/products/range.png') }}" alt="50m–5km Range"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-bold text-zinc-900 dark:text-zinc-100 text-sm sm:text-base">
                        50m–5km Range
                    </h4>
                    <p class="mt-1 text-zinc-600 dark:text-zinc-400 text-sm leading-snug">
                        Large-scale open-pit mine monitoring from a single point
                    </p>
                </div>
            </div>

            {{-- Item 2 --}}
            <div class="flex items-start gap-5 js-adv-item" style="animation-delay: .08s;">
                <div class="shrink-0 w-16 h-16 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('storage/products/power.png') }}" alt="Dual Power Mode"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-bold text-zinc-900 dark:text-zinc-100 text-sm sm:text-base">
                        Dual Power Mode
                    </h4>
                    <p class="mt-1 text-zinc-600 dark:text-zinc-400 text-sm leading-snug">
                        PLN/genset/solar panel + UPS - reliable in locations without stable electricity
                    </p>
                </div>
            </div>

            {{-- Item 3 --}}
            <div class="flex items-start gap-5 js-adv-item" style="animation-delay: .16s;">
                <div class="shrink-0 w-16 h-16 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('storage/products/accuracy.png') }}" alt="0.1mm Accuracy"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-bold text-zinc-900 dark:text-zinc-100 text-sm sm:text-base">
                        0.1mm Accuracy
                    </h4>
                    <p class="mt-1 text-zinc-600 dark:text-zinc-400 text-sm leading-snug">
                        Detects micro movements invisible to the eye
                    </p>
                </div>
            </div>

            {{-- Item 4 --}}
            <div class="flex items-start gap-5 js-adv-item" style="animation-delay: .24s;">
                <div class="shrink-0 w-16 h-16 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('storage/products/weight.png') }}" alt="System Weight ≤15kg"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-bold text-zinc-900 dark:text-zinc-100 text-sm sm:text-base">
                        System Weight ≤15kg
                    </h4>
                    <p class="mt-1 text-zinc-600 dark:text-zinc-400 text-sm leading-snug">
                        Still transportable and field-installable by a small team electricity
                    </p>
                </div>
            </div>

            {{-- Item 5 --}}
            <div class="flex items-start gap-5 js-adv-item" style="animation-delay: .32s;">
                <div class="shrink-0 w-16 h-16 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('storage/products/360.png') }}" alt="360° Coverage"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-bold text-zinc-900 dark:text-zinc-100 text-sm sm:text-base">
                        360° Coverage
                    </h4>
                    <p class="mt-1 text-zinc-600 dark:text-zinc-400 text-sm leading-snug">
                        Distance resolution ≤0.2m and angle ≤5mrad — highly detailed deformation maps
                    </p>
                </div>
            </div>

            {{-- Item 6 --}}
            <div class="flex items-start gap-5 js-adv-item" style="animation-delay: .4s;">
                <div class="shrink-0 w-16 h-16 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('storage/products/cloud.png') }}" alt="Cloud Platform"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-bold text-zinc-900 dark:text-zinc-100 text-sm sm:text-base">
                        Cloud Platform
                    </h4>
                    <p class="mt-1 text-zinc-600 dark:text-zinc-400 text-sm leading-snug">
                        SMS alert, remote access, 3D visualization, multi-sensor integration
                    </p>
                </div>
            </div>

            {{-- Item 7 --}}
            <div class="flex items-start gap-5 js-adv-item" style="animation-delay: .48s;">
                <div class="shrink-0 w-16 h-16 overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('storage/products/min.png') }}" alt="Data Updates Every 1 Minute"
                        class="w-full h-full object-cover">
                </div>
                <div>
                    <h4 class="font-bold text-zinc-900 dark:text-zinc-100 text-sm sm:text-base">
                        Data Updates Every 1 Minute
                    </h4>
                    <p class="mt-1 text-zinc-600 dark:text-zinc-400 text-sm leading-snug">
                        Large-scale open-pit mine monitoring from a single point
                    </p>
                </div>
            </div>

        </div>
        </div>
    </div>
</section> -->

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>

<script>
pdfjsLib.GlobalWorkerOptions.workerSrc =
'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
</script>
<script>
    document.addEventListener("DOMContentLoaded", async () => {

    const canvases = document.querySelectorAll(".pdf-preview");

    for (const canvas of canvases) {

        const pdf = await pdfjsLib.getDocument(canvas.dataset.pdf).promise;

        const page = await pdf.getPage(1);

        const viewport = page.getViewport({ scale: 2 });

        canvas.width = viewport.width;
        canvas.height = viewport.height;

        await page.render({
            canvasContext: canvas.getContext("2d"),
            viewport
        }).promise;
    }

    const track = document.getElementById("pdfTrack");
    const slides = document.querySelectorAll("#pdfTrack > div");
    const dots = document.getElementById("dots");

    let current = 0;

    slides.forEach((_, i) => {
        const dot = document.createElement("button");
        dot.className = "w-3 h-3 rounded-full bg-white/40";
        dot.onclick = () => move(i);
        dots.appendChild(dot);
    });

    function updateDots() {
        [...dots.children].forEach((d, i) => {
            d.className = i === current
                ? "w-8 h-3 rounded-full bg-white transition-all"
                : "w-3 h-3 rounded-full bg-white/40 transition-all";
        });
    }

    function move(i) {
        current = i;
        track.style.transform = `translateX(-${current * 100}%)`;
        updateDots();
    }

    document.getElementById("next").onclick = () => {
        move((current + 1) % slides.length);
    };

    document.getElementById("prev").onclick = () => {
        move((current - 1 + slides.length) % slides.length);
    };

    updateDots();

    setInterval(() => {
        move((current + 1) % slides.length);
    }, 4000);

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