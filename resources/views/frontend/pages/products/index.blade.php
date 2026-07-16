@extends('frontend.layouts.app')

@section(
    'title',
    strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'mulaidigital.com'))
)

@section('content')
<section class="py-10 bg-white dark:bg-zinc-950 overflow-x-hidden">
    <div class="mx-auto max-w-full px-4 sm:px-6 lg:px-8">

        <div id="productGrid">

            @forelse($groupedProducts as $categoryName => $products)

                {{-- Category Heading --}}
                <div class="mb-4 mt-8 first:mt-0 js-fade-up">
                    <h2 class="text-xl sm:text-2xl font-extrabold uppercase tracking-widest
                               border-b border-gray-200 dark:border-zinc-800 pb-2 break-words">
                        {{ $categoryName }}
                    </h2>
                </div>

                {{-- Product Cards Grid --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10 min-w-0">

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
                                    ->map(fn($img) => asset('storage/products/catalog/' . basename($img)))
                                    ->toArray()
                            );

                            // Decode & normalisasi kolom videos (JSON array)
                            $videos = is_array($product->videos)
                                ? $product->videos
                                : json_decode($product->videos, true);

                            $videosJson = json_encode(
                                collect($videos ?? [])
                                    ->map(function ($v) {
                                        // Kasus 1: item berupa string path langsung,
                                        // contoh: "products/t20.mp4"
                                        if (is_string($v)) {
                                            // Deteksi kalau isinya link YouTube
                                            if (str_contains($v, 'youtube.com') || str_contains($v, 'youtu.be')) {
                                                return [
                                                    'type' => 'youtube',
                                                    'src'  => $v,
                                                ];
                                            }
                                            return [
                                                'type' => 'file',
                                                'src'  => asset('storage/' . ltrim($v, '/')),
                                            ];
                                        }

                                        // Kasus 2: item berupa object {"type":..,"url":..}
                                        if (($v['type'] ?? null) === 'youtube') {
                                            return [
                                                'type' => 'youtube',
                                                'src'  => $v['url'],
                                            ];
                                        }
                                        return [
                                            'type' => 'file',
                                            'src'  => asset('storage/' . ltrim($v['url'] ?? '', '/')),
                                        ];
                                    })
                                    ->toArray()
                            );

                            $hasVideo = is_array($videos) && count($videos) > 0;

                            $pdfUrl = $product->pdf_file
                                    ? asset('storage/' . $product->pdf_file)
                                    : null;

                            $pdfName = $product->pdf_file
                                    ? basename($product->pdf_file)
                                    : null;
                        @endphp

                        <div
                            class="group relative overflow-hidden rounded-lg js-product-item cursor-pointer border border-gray-400 dark:border-zinc-700
                                   transition duration-300 hover:shadow-lg min-w-0 w-full"
                            style="animation-delay: {{ $index * 0.05 }}s; aspect-ratio: 16/9;"
                            data-images="{{ $imagesJson }}"
                            data-videos="{{ $videosJson }}"
                            data-label="{{ $productName }}"
                            data-fallback="{{ $fallbackUrl }}"
                            data-pdf="{{ $pdfUrl }}"
                            data-pdf-name="{{ $pdfName }}"
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

                            {{-- Badge kalau produk punya video --}}
                            <!-- @if($hasVideo)
                                <!-- <div class="absolute top-2 right-2 z-10 w-8 h-8 rounded-full
                                            bg-black/60 flex items-center justify-center pointer-events-none">
                                    <!-- <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg> -->
                                <!-- </div>
                            @endif  -->

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
                                           text-xs sm:text-sm leading-tight tracking-wide mb-2
                                           break-words line-clamp-2">
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


{{-- ===================== DETAIL VIEWER SECTION ===================== --}}
<section id="pdfViewerSection"
         class="bg-gray-50 dark:bg-zinc-900 py-16 hidden overflow-x-hidden">
    <div class="max-w-5xl mx-auto px-6 sm:px-10">

        {{-- Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center
                    justify-between gap-4 mb-8">

            {{-- Judul produk --}}
            <div class="flex items-center gap-4">
                <div class="w-1 h-8 bg-[#0B5C8C] rounded-full flex-shrink-0"></div>
                <h2 id="pdfViewerLabel"
                    class="font-extrabold text-xl md:text-2xl text-zinc-900
                           dark:text-zinc-100 uppercase tracking-wide">
                    —
                </h2>
            </div>

            {{-- Tombol Tutup --}}
            <button onclick="closePdfViewer()"
                    class="inline-flex items-center gap-1.5
                           bg-red-500 hover:bg-red-600
                           text-white
                           text-xs font-bold uppercase tracking-wide
                           px-4 py-2 rounded-lg transition duration-300 flex-shrink-0">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
                Close
            </button>

        </div>

        {{-- ===== GAMBAR (tampil sendiri, punya galeri + thumbnail sendiri) ===== --}}
        <div id="imageGallerySection" class="mb-10 hidden">

            <h3 class="text-sm font-bold uppercase tracking-widest text-zinc-500
                       dark:text-zinc-400 mb-3">
                Product Images
            </h3>

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

                {{-- Tombol Download foto yang sedang tampil --}}
                <button id="downloadImageBtn"
                        onclick="downloadCurrentImage()"
                        class="absolute bottom-3 right-3 inline-flex items-center gap-1.5
                               bg-white/90 hover:bg-white
                               text-zinc-700
                               text-xs font-bold uppercase tracking-wide
                               px-3 py-1.5 rounded-lg shadow transition duration-300">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2.5"
                              d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1
                                 m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download
                </button>

            </div>

            {{-- Thumbnail Strip khusus gambar --}}
            <div id="imageThumbnailStrip" class="hidden grid gap-2"></div>

        </div>

        {{-- ===== VIDEO (tampil sendiri, terpisah dari gambar) ===== --}}
        <div id="videoSection" class="mb-10 hidden">

            <h3 class="text-sm font-bold uppercase tracking-widest text-zinc-500
                       dark:text-zinc-400 mb-3">
                Product Video
            </h3>

            <div class="relative bg-black rounded-2xl overflow-hidden
                        border border-gray-200 dark:border-zinc-700 shadow-lg mb-4">

                <video id="mainProductVideo"
                       controls
                       playsinline
                       class="hidden w-full max-h-[100vh]">
                </video>

                <iframe id="mainProductYoutube"
                        src=""
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        class="hidden w-full aspect-video">
                </iframe>

            </div>

            {{-- Thumbnail Strip khusus video, hanya muncul kalau video > 1 --}}
            <div id="videoThumbnailStrip" class="hidden grid gap-2"></div>

        </div>

        {{-- ===== DOWNLOAD (PDF Catalogue) ===== --}}
        <div id="downloadSection" class="hidden">

            <h3 class="text-lg font-extrabold uppercase tracking-wide text-zinc-900
                       dark:text-zinc-100 mb-3">
                Download
            </h3>

            <a id="downloadPdfCard"
               href="#"
               target="_blank"
               rel="noopener noreferrer"
               class="flex items-center justify-between gap-4 bg-white dark:bg-zinc-800
                      border border-gray-200 dark:border-zinc-700 rounded-lg
                      px-4 py-3 max-w-md shadow-sm hover:shadow-md transition duration-300">

                <div class="flex items-center gap-3 min-w-0">
                    {{-- Ikon PDF --}}
                    <div class="flex-shrink-0 w-9 h-9 rounded bg-red-50 dark:bg-red-900/30
                                flex items-center justify-center">
                        <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2
                                     2 0 002-2V8l-6-6zm-1 1.5L18.5 9H13V3.5zM6
                                     20V4h5v7h7v9H6z"/>
                        </svg>
                    </div>

                    <span id="downloadPdfName"
                          class="text-xs sm:text-sm font-medium text-zinc-700
                                 dark:text-zinc-200 truncate">
                        —
                    </span>
                </div>

                <span class="flex-shrink-0 inline-flex items-center
                             bg-[#0B5C8C] hover:bg-[#094a72]
                             text-white text-[11px] font-bold uppercase
                             tracking-wide px-4 py-1.5 rounded-full
                             transition duration-300">
                    Download
                </span>

            </a>

        </div>

    </div>
</section>


@push('scripts')
<script>
let currentImages     = [];
let currentImageIndex = 0;
let currentVideos     = [];

function handleProductClick(el) {
    const imagesRaw = el.dataset.images;
    const videosRaw = el.dataset.videos;
    const label      = el.dataset.label;
    const fallback   = el.dataset.fallback;
    const pdfUrl     = el.dataset.pdf || null;
    const pdfName    = el.dataset.pdfName || null;

    let images = [];
    let videos = [];
    try { images = JSON.parse(imagesRaw); } catch(e) { images = []; }
    try { videos = JSON.parse(videosRaw); } catch(e) { videos = []; }

    if (!images.length && !videos.length) {
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

    currentImages      = images;
    currentImageIndex  = 0;
    currentVideos      = videos;

    // Update label
    const labelEl = document.getElementById('pdfViewerLabel');
    if (labelEl) labelEl.textContent = label;

    // -- Section Gambar --
    const imageSection = document.getElementById('imageGallerySection');
    if (images.length) {
        imageSection.classList.remove('hidden');
        showImage(0);
        buildImageThumbnails();

        const imgPrev = document.getElementById('imgPrev');
        const imgNext = document.getElementById('imgNext');
        if (images.length > 1) {
            imgPrev?.classList.remove('hidden'); imgPrev?.classList.add('flex');
            imgNext?.classList.remove('hidden'); imgNext?.classList.add('flex');
        } else {
            imgPrev?.classList.add('hidden'); imgPrev?.classList.remove('flex');
            imgNext?.classList.add('hidden'); imgNext?.classList.remove('flex');
        }
    } else {
        imageSection.classList.add('hidden');
    }

    // -- Section Video --
    const videoSection = document.getElementById('videoSection');
    if (videos.length) {
        videoSection.classList.remove('hidden');
        showVideo(0);
        buildVideoThumbnails();
    } else {
        videoSection.classList.add('hidden');
    }

    // -- Section Download --
    const downloadSection = document.getElementById('downloadSection');
    const downloadCard    = document.getElementById('downloadPdfCard');
    const downloadName    = document.getElementById('downloadPdfName');
    if (pdfUrl) {
        downloadSection.classList.remove('hidden');
        downloadCard.href = pdfUrl;
        downloadName.textContent = pdfName || label;
    } else {
        downloadSection.classList.add('hidden');
    }

    // Tampilkan viewer
    const viewerSection = document.getElementById('pdfViewerSection');
    if (viewerSection) viewerSection.classList.remove('hidden');

    setTimeout(() => {
        viewerSection?.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }, 100);
}

/* ============ GAMBAR ============ */
function showImage(index) {
    currentImageIndex = index;
    const mainImg = document.getElementById('mainProductImage');
    if (mainImg) {
        mainImg.src = currentImages[index];
        mainImg.alt = document.getElementById('pdfViewerLabel')?.textContent || '';
    }
    document.querySelectorAll('#imageThumbnailStrip .thumb-item').forEach((t, i) => {
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

function buildImageThumbnails() {
    const strip = document.getElementById('imageThumbnailStrip');
    if (!strip) return;
    strip.innerHTML = '';

    if (currentImages.length <= 1) {
        strip.classList.add('hidden');
        return;
    }

    strip.classList.remove('hidden');
    const cols = Math.min(currentImages.length, 6);
    strip.style.gridTemplateColumns = `repeat(${cols}, minmax(0, 1fr))`;

    currentImages.forEach((src, i) => {
        const div = document.createElement('div');
        div.className = `thumb-item cursor-pointer rounded-lg overflow-hidden
                         border-2 border-transparent transition duration-200
                         ${i === 0 ? 'ring-2 ring-[#0B5C8C] opacity-100' : 'opacity-50'}`;
        div.onclick = () => showImage(i);

        const imgEl = document.createElement('img');
        imgEl.src       = src;
        imgEl.className = 'w-full aspect-square object-cover hover:opacity-100 transition';
        div.appendChild(imgEl);
        strip.appendChild(div);
    });
}

function downloadCurrentImage() {
    if (!currentImages.length) return;

    const url      = currentImages[currentImageIndex];
    const label    = document.getElementById('pdfViewerLabel')?.textContent || 'image';
    const ext      = url.split('.').pop().split('?')[0] || 'jpg';
    const filename = label.toLowerCase().replace(/\s+/g, '-') + '-' + (currentImageIndex + 1) + '.' + ext;

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
            window.open(url, '_blank');
        });
}

/* ============ VIDEO ============ */
function showVideo(index) {
    const item = currentVideos[index];
    if (!item) return;

    const mainVideo   = document.getElementById('mainProductVideo');
    const mainYoutube = document.getElementById('mainProductYoutube');

    mainVideo.classList.add('hidden');
    mainYoutube.classList.add('hidden');
    mainVideo.pause();
    mainVideo.src = '';
    mainYoutube.src = '';

    if (item.type === 'youtube') {
        mainYoutube.src = toYoutubeEmbed(item.src);
        mainYoutube.classList.remove('hidden');
    } else {
        mainVideo.src = item.src;
        mainVideo.classList.remove('hidden');
    }

    document.querySelectorAll('#videoThumbnailStrip .thumb-item').forEach((t, i) => {
        t.classList.toggle('ring-2',          i === index);
        t.classList.toggle('ring-[#0B5C8C]', i === index);
        t.classList.toggle('opacity-100',     i === index);
        t.classList.toggle('opacity-50',      i !== index);
    });
}

function toYoutubeEmbed(url) {
    const match = url.match(/(?:youtu\.be\/|v=|embed\/)([a-zA-Z0-9_-]{11})/);
    const id = match ? match[1] : '';
    return `https://www.youtube.com/embed/${id}`;
}

function buildVideoThumbnails() {
    const strip = document.getElementById('videoThumbnailStrip');
    if (!strip) return;
    strip.innerHTML = '';

    if (currentVideos.length <= 1) {
        strip.classList.add('hidden');
        return;
    }

    strip.classList.remove('hidden');
    const cols = Math.min(currentVideos.length, 6);
    strip.style.gridTemplateColumns = `repeat(${cols}, minmax(0, 1fr))`;

    currentVideos.forEach((item, i) => {
        const div = document.createElement('div');
        div.className = `thumb-item relative cursor-pointer rounded-lg overflow-hidden
                         border-2 border-transparent transition duration-200 bg-zinc-800
                         ${i === 0 ? 'ring-2 ring-[#0B5C8C] opacity-100' : 'opacity-50'}`;
        div.onclick = () => showVideo(i);

        const imgEl = document.createElement('img');
        imgEl.className = 'w-full aspect-square object-cover';

        if (item.type === 'youtube') {
            const match = item.src.match(/(?:youtu\.be\/|v=|embed\/)([a-zA-Z0-9_-]{11})/);
            const id = match ? match[1] : '';
            imgEl.src = `https://img.youtube.com/vi/${id}/hqdefault.jpg`;
        }

        div.appendChild(imgEl);

        const playIcon = document.createElement('div');
        playIcon.className = 'absolute inset-0 flex items-center justify-center pointer-events-none';
        playIcon.innerHTML = `
            <div class="w-6 h-6 rounded-full bg-black/60 flex items-center justify-center">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                </svg>
            </div>`;
        div.appendChild(playIcon);

        strip.appendChild(div);
    });
}

/* ============ CLOSE ============ */
function closePdfViewer() {
    const viewerSection = document.getElementById('pdfViewerSection');
    const mainImg       = document.getElementById('mainProductImage');
    const mainVideo      = document.getElementById('mainProductVideo');
    const mainYoutube    = document.getElementById('mainProductYoutube');

    if (mainImg) mainImg.src = '';
    if (mainVideo) { mainVideo.pause(); mainVideo.src = ''; }
    if (mainYoutube) mainYoutube.src = '';

    currentImages      = [];
    currentImageIndex  = 0;
    currentVideos      = [];

    if (viewerSection) viewerSection.classList.add('hidden');

    document.querySelectorAll('.product-active-ring').forEach(r => {
        r.style.boxShadow = 'none';
        r.style.opacity   = '0';
    });

    document.getElementById('productGrid')
        ?.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

document.addEventListener("DOMContentLoaded", () => {
    const animTargets = document.querySelectorAll('.js-product-item, .js-fade-up');
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