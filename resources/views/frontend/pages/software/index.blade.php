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
                        @endphp

                        <div
                            class="group relative overflow-hidden rounded-lg
                                   js-software-item cursor-pointer border border-gray-400 dark:border-zinc-700
                                   transition duration-300 hover:shadow-lg"
                            style="animation-delay: {{ $index * 0.05 }}s;
                                   aspect-ratio: 16/9;"
                            data-catalog="{{ $catalogJson }}"
                            data-label="{{ $softwareName }}"
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


{{-- ===================== CATALOG IMAGE VIEWER ===================== --}}
<section id="softwareViewerSection"
         class="bg-gray-50 dark:bg-zinc-900 py-16 hidden">
    <div class="max-w-5xl mx-auto px-6 sm:px-10">

        {{-- Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center
                    justify-between gap-4 mb-6">

            {{-- Judul software --}}
            <div class="flex items-center gap-4">
                <div class="w-1 h-8 bg-[#0B5C8C] rounded-full flex-shrink-0"></div>
                <h2 id="softwareViewerLabel"
                    class="font-extrabold text-xl md:text-2xl text-zinc-900
                           dark:text-zinc-100 uppercase tracking-wide">
                    —
                </h2>
            </div>

            {{-- Tombol aksi --}}
            <div class="flex items-center gap-2 flex-shrink-0">

                {{-- Download gambar --}}
                <button onclick="downloadCurrentCatalog()"
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

                {{-- Tutup --}}
                <button onclick="closeSoftwareViewer()"
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

        {{-- Main Catalog Image --}}
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

        </div>

        {{-- Thumbnail Strip --}}
        <div id="catalogThumbnailStrip" class="hidden gap-2 mt-2"></div>

    </div>
</section>

@push('scripts')
<script>
let currentCatalogs      = [];
let currentCatalogIndex  = 0;

// ── Klik software card ──
function handleSoftwareClick(el) {
    const catalogRaw = el.dataset.catalog;
    const label      = el.dataset.label;

    let catalogs = [];
    try { catalogs = JSON.parse(catalogRaw); } catch(e) { catalogs = []; }

    if (!catalogs || catalogs.length === 0) return;

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
    currentCatalogs     = catalogs;
    currentCatalogIndex = 0;

    // Update label
    const labelEl = document.getElementById('softwareViewerLabel');
    if (labelEl) labelEl.textContent = label;

    // Tampilkan gambar pertama
    showCatalog(0);
    buildCatalogThumbnails();

    // Nav prev/next
    const prev = document.getElementById('catalogPrev');
    const next = document.getElementById('catalogNext');
    if (catalogs.length > 1) {
        prev?.classList.remove('hidden'); prev?.classList.add('flex');
        next?.classList.remove('hidden'); next?.classList.add('flex');
    } else {
        prev?.classList.add('hidden'); prev?.classList.remove('flex');
        next?.classList.add('hidden'); next?.classList.remove('flex');
    }

    // Tampilkan viewer
    const viewer = document.getElementById('softwareViewerSection');
    viewer?.classList.remove('hidden');

    setTimeout(() => {
        viewer?.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }, 100);
}

function showCatalog(index) {
    currentCatalogIndex = index;
    const mainImg = document.getElementById('mainCatalogImage');
    if (mainImg) {
        mainImg.src = currentCatalogs[index];
        mainImg.alt = document.getElementById('softwareViewerLabel')?.textContent || '';
    }
    document.querySelectorAll('.catalog-thumb-item').forEach((t, i) => {
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
    strip.className = 'grid gap-2 mt-4';
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

function closeSoftwareViewer() {
    const viewer  = document.getElementById('softwareViewerSection');
    const mainImg = document.getElementById('mainCatalogImage');

    if (mainImg) mainImg.src = '';
    currentCatalogs     = [];
    currentCatalogIndex = 0;

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