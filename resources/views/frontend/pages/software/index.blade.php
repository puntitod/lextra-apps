@extends('frontend.layouts.app')

@section(
    'title',
    strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'Lextera'))
)

@section('content')

{{-- ===================== SOFTWARE GRID ===================== --}}
<section class="py-10 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-full px-4 sm:px-6 lg:px-8 bord">

        <div id="softwareGrid">

            @if($softwares->isEmpty())
                <div class="text-center py-16">
                    <p class="text-zinc-500 dark:text-zinc-400 text-sm">No software found.</p>
                </div>
            @else

                {{-- Grid 3 kolom — persis seperti gambar referensi --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                    @foreach($softwares as $index => $software)

                        @php
                            $locale = app()->getLocale();

                            $softwareName = $locale === 'en'
                                ? ($software->name_en ?? $software->name_id)
                                : ($software->name_id ?? $software->name_en);

                            $thumbImages = $software->images_array;
                            $firstThumb  = count($thumbImages) > 0
                                ? asset('storage/' . $thumbImages[0])
                                : null;

                            $catalogImages = $software->catalog_images_array;

                            $catalogJson = json_encode(
                                collect($catalogImages)
                                    ->map(fn($img) => asset('storage/' . $img))
                                    ->toArray()
                            );

                            // ── Videos: kolom "videos" (array string path atau bisa juga object {type,url}) ──
                            $rawVideos = $software->videos_array
                                ?? (is_array($software->videos)
                                    ? $software->videos
                                    : json_decode($software->videos, true));

                            $videosJson = json_encode(
                                collect($rawVideos ?? [])
                                    ->map(function ($v) {
                                        // Item berupa string path langsung, contoh: "software/demo.mp4"
                                        if (is_string($v)) {
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

                                        // Item berupa object {"type":..,"url":..}
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

                            $hasVideo = is_array($rawVideos) && count($rawVideos) > 0;

                            // ── PDF (sama seperti pada halaman produk) ──
                            $pdfUrl = $software->pdf_file
                                    ? asset('storage/' . $software->pdf_file)
                                    : null;

                            $pdfName = $software->pdf_file
                                    ? basename($software->pdf_file)
                                    : null;
                        @endphp

                        <div
                            class="group relative overflow-hidden rounded-lg
                                   js-software-item cursor-pointer border border-gray-400 dark:border-zinc-700
                                   transition duration-300 hover:shadow-lg"
                            style="animation-delay: {{ $index * 0.05 }}s;
                                   aspect-ratio: 16/9;"
                            data-catalog="{{ $catalogJson }}"
                            data-videos="{{ $videosJson }}"
                            data-label="{{ $softwareName }}"
                            data-pdf="{{ $pdfUrl }}"
                            data-pdf-name="{{ $pdfName }}"
                            onclick="handleSoftwareClick(this)">

                            {{-- Gambar thumbnail --}}
                            @if($firstThumb)
                                <img
                                    src="{{ $firstThumb }}"
                                    alt="{{ $softwareName }}"
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

                            {{-- Badge kalau software punya video --}}
                            <!-- @if($hasVideo)
                                <div class="absolute top-2 right-2 z-10 w-8 h-8 rounded-full
                                            bg-black/60 flex items-center justify-center pointer-events-none">
                                    <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            @endif -->

                            {{-- Ring highlight saat aktif --}}
                            <div class="software-active-ring absolute inset-0 rounded-lg
                                        pointer-events-none transition-all duration-300"
                                 style="opacity:0;"></div>

                            {{-- Overlay biru bawah — sama persis seperti gambar --}}
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 z-10
                                        w-[80%] bg-[#0B5C8C]/85 rounded-t-2xl
                                        px-4 py-3 text-center transition duration-300
                                        group-hover:bg-[#0B5C8C]/95">

                                <h3 class="text-white font-extrabold uppercase
                                           text-xs sm:text-sm leading-tight
                                           tracking-wide mb-2">
                                    {{ $softwareName }}
                                </h3>

                                <span class="inline-flex items-center justify-center
                                             bg-white hover:bg-[#0B5C8C]
                                             text-[#0B5C8C] hover:text-white
                                             border border-white
                                             text-[9px] sm:text-[10px] font-bold
                                             uppercase tracking-widest
                                             px-4 py-1 rounded-full
                                             transition duration-300">
                                    View Details
                                </span>

                            </div>

                        </div>

                    @endforeach

                </div>

            @endif

        </div>

    </div>
</section>


{{-- ===================== SOFTWARE DETAIL VIEWER ===================== --}}
<section id="softwareViewerSection"
         class="bg-gray-50 dark:bg-zinc-900 py-16 hidden">
    <div class="max-w-5xl mx-auto px-6 sm:px-10">

        {{-- ===== GAMBAR CATALOG (tampil sendiri, galeri + thumbnail sendiri) ===== --}}
        <div id="catalogGallerySection" class="mb-10 hidden">

            <div class="relative bg-white dark:bg-zinc-800 rounded-2xl overflow-hidden
                        border border-gray-200 dark:border-zinc-700 shadow-lg mb-4">

                <img id="mainCatalogImage"
                     src=""
                     alt=""
                     class="w-full object-contain max-h-[100vh]">

                {{-- Prev --}}
                <button id="catalogPrev"
                        onclick="changeCatalog(-1)"
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

                {{-- Next --}}
                <button id="catalogNext"
                        onclick="changeCatalog(1)"
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
                <button id="downloadCatalogBtn"
                        onclick="downloadCurrentCatalog()"
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
            <div id="catalogThumbnailStrip" class="hidden grid gap-2"></div>

        </div>

        {{-- ===== VIDEO (tampil sendiri, terpisah dari gambar) ===== --}}
        <div id="softwareVideoSection" class="mb-10 hidden">

            <div class="relative bg-black rounded-2xl overflow-hidden
                        border border-gray-200 dark:border-zinc-700 shadow-lg mb-4">

                <video id="mainSoftwareVideo"
                       controls
                       playsinline
                       class="hidden w-full max-h-[100vh]">
                </video>

                <iframe id="mainSoftwareYoutube"
                        src=""
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                        class="hidden w-full aspect-video">
                </iframe>

            </div>

            {{-- Thumbnail Strip khusus video, muncul kalau video > 1 --}}
            <div id="softwareVideoThumbnailStrip" class="hidden grid gap-2"></div>

        </div>

        {{-- ===== DOWNLOAD (PDF) ===== --}}
        <div id="softwareDownloadSection" class="hidden">

            <h3 class="text-lg font-extrabold uppercase tracking-wide text-zinc-900
                       dark:text-zinc-100 mb-3">
                Download
            </h3>

            <a id="downloadSoftwarePdfCard"
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

                    <span id="downloadSoftwarePdfName"
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
let currentCatalogs     = [];
let currentCatalogIndex = 0;
let currentSoftwareVideos = [];

// ── Klik software card ──
function handleSoftwareClick(el) {
    const catalogRaw = el.dataset.catalog;
    const videosRaw  = el.dataset.videos;
    const label      = el.dataset.label;
    const pdfUrl     = el.dataset.pdf || null;
    const pdfName    = el.dataset.pdfName || null;

    let catalogs = [];
    let videos   = [];
    try { catalogs = JSON.parse(catalogRaw); } catch(e) { catalogs = []; }
    try { videos   = JSON.parse(videosRaw);  } catch(e) { videos = []; }

    if (!catalogs.length && !videos.length) return;

    // Highlight card aktif
    document.querySelectorAll('.software-active-ring').forEach(r => {
        r.style.boxShadow = 'none';
        r.style.opacity   = '0';
    });
    const ring = el.querySelector('.software-active-ring');
    if (ring) {
        ring.style.boxShadow = '0 0 0 3px #0B5C8C';
        ring.style.opacity   = '1';
    }

    // Set state
    currentCatalogs        = catalogs;
    currentCatalogIndex    = 0;
    currentSoftwareVideos  = videos;

    // Update label
    const labelEl = document.getElementById('softwareViewerLabel');
    if (labelEl) labelEl.textContent = label;

    // -- Section Gambar --
    const catalogSection = document.getElementById('catalogGallerySection');
    if (catalogs.length) {
        catalogSection.classList.remove('hidden');
        showCatalog(0);
        buildCatalogThumbnails();

        const prev = document.getElementById('catalogPrev');
        const next = document.getElementById('catalogNext');
        if (catalogs.length > 1) {
            prev?.classList.remove('hidden'); prev?.classList.add('flex');
            next?.classList.remove('hidden'); next?.classList.add('flex');
        } else {
            prev?.classList.add('hidden'); prev?.classList.remove('flex');
            next?.classList.add('hidden'); next?.classList.remove('flex');
        }
    } else {
        catalogSection.classList.add('hidden');
    }

    // -- Section Video --
    const videoSection = document.getElementById('softwareVideoSection');
    if (videos.length) {
        videoSection.classList.remove('hidden');
        showSoftwareVideo(0);
        buildSoftwareVideoThumbnails();
    } else {
        videoSection.classList.add('hidden');
    }

    // -- Section Download --
    const downloadSection = document.getElementById('softwareDownloadSection');
    const downloadCard    = document.getElementById('downloadSoftwarePdfCard');
    const downloadName    = document.getElementById('downloadSoftwarePdfName');
    if (pdfUrl) {
        downloadSection.classList.remove('hidden');
        downloadCard.href = pdfUrl;
        downloadName.textContent = pdfName || label;
    } else {
        downloadSection.classList.add('hidden');
    }

    // Tampilkan viewer
    const viewer = document.getElementById('softwareViewerSection');
    viewer?.classList.remove('hidden');

    setTimeout(() => {
        viewer?.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }, 100);
}

/* ============ GAMBAR CATALOG ============ */
function showCatalog(index) {
    currentCatalogIndex = index;
    const mainImg = document.getElementById('mainCatalogImage');
    if (mainImg) {
        mainImg.src = currentCatalogs[index];
        mainImg.alt = document.getElementById('softwareViewerLabel')?.textContent || '';
    }
    document.querySelectorAll('#catalogThumbnailStrip .catalog-thumb-item').forEach((t, i) => {
        t.classList.toggle('ring-2',          i === index);
        t.classList.toggle('ring-[#0B5C8C]', i === index);
        t.classList.toggle('opacity-100',     i === index);
        t.classList.toggle('opacity-50',      i !== index);
    });
}

function changeCatalog(dir) {
    if (!currentCatalogs.length) return;
    showCatalog((currentCatalogIndex + dir + currentCatalogs.length) % currentCatalogs.length);
}

function buildCatalogThumbnails() {
    const strip = document.getElementById('catalogThumbnailStrip');
    if (!strip) return;
    strip.innerHTML = '';

    if (currentCatalogs.length <= 1) {
        strip.classList.add('hidden');
        return;
    }

    strip.classList.remove('hidden');
    const cols = Math.min(currentCatalogs.length, 6);
    strip.style.gridTemplateColumns = `repeat(${cols}, minmax(0, 1fr))`;

    currentCatalogs.forEach((img, i) => {
        const div = document.createElement('div');
        div.className = `catalog-thumb-item cursor-pointer rounded-lg overflow-hidden
                         border-2 border-transparent transition duration-200
                         ${i === 0 ? 'ring-2 ring-[#0B5C8C] opacity-100' : 'opacity-50'}`;
        div.onclick = () => showCatalog(i);

        const imgEl = document.createElement('img');
        imgEl.src       = img;
        imgEl.className = 'w-full aspect-square object-cover hover:opacity-100 transition';
        div.appendChild(imgEl);
        strip.appendChild(div);
    });
}

function downloadCurrentCatalog() {
    if (!currentCatalogs.length) return;

    const url      = currentCatalogs[currentCatalogIndex];
    const label    = document.getElementById('softwareViewerLabel')?.textContent || 'image';
    const ext      = url.split('.').pop().split('?')[0] || 'jpg';
    const filename = label.toLowerCase().replace(/\s+/g, '-')
                     + '-' + (currentCatalogIndex + 1) + '.' + ext;

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
        .catch(() => window.open(url, '_blank'));
}

/* ============ VIDEO ============ */
function showSoftwareVideo(index) {
    const item = currentSoftwareVideos[index];
    if (!item) return;

    const mainVideo   = document.getElementById('mainSoftwareVideo');
    const mainYoutube = document.getElementById('mainSoftwareYoutube');

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

    document.querySelectorAll('#softwareVideoThumbnailStrip .video-thumb-item').forEach((t, i) => {
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

function buildSoftwareVideoThumbnails() {
    const strip = document.getElementById('softwareVideoThumbnailStrip');
    if (!strip) return;
    strip.innerHTML = '';

    if (currentSoftwareVideos.length <= 1) {
        strip.classList.add('hidden');
        return;
    }

    strip.classList.remove('hidden');
    const cols = Math.min(currentSoftwareVideos.length, 6);
    strip.style.gridTemplateColumns = `repeat(${cols}, minmax(0, 1fr))`;

    currentSoftwareVideos.forEach((item, i) => {
        const div = document.createElement('div');
        div.className = `video-thumb-item relative cursor-pointer rounded-lg overflow-hidden
                         border-2 border-transparent transition duration-200 bg-zinc-800
                         ${i === 0 ? 'ring-2 ring-[#0B5C8C] opacity-100' : 'opacity-50'}`;
        div.onclick = () => showSoftwareVideo(i);

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
function closeSoftwareViewer() {
    const viewer       = document.getElementById('softwareViewerSection');
    const mainImg       = document.getElementById('mainCatalogImage');
    const mainVideo      = document.getElementById('mainSoftwareVideo');
    const mainYoutube    = document.getElementById('mainSoftwareYoutube');

    if (mainImg) mainImg.src = '';
    if (mainVideo) { mainVideo.pause(); mainVideo.src = ''; }
    if (mainYoutube) mainYoutube.src = '';

    currentCatalogs        = [];
    currentCatalogIndex    = 0;
    currentSoftwareVideos  = [];

    viewer?.classList.add('hidden');

    document.querySelectorAll('.software-active-ring').forEach(r => {
        r.style.boxShadow = 'none';
        r.style.opacity   = '0';
    });

    document.getElementById('softwareGrid')
        ?.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

document.addEventListener('DOMContentLoaded', () => {
    const animTargets = document.querySelectorAll('.js-software-item');
    if (animTargets.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('is-visible');
                    void entry.target.offsetWidth;
                    entry.target.classList.add('is-visible');
                } else {
                    entry.target.classList.remove('is-visible');
                }
            });
        }, { threshold: 0.15 });
        animTargets.forEach(el => observer.observe(el));
    }
});
</script>
@endpush

@endsection