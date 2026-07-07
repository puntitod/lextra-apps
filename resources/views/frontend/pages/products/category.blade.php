@extends('frontend.layouts.app')

@section(
    'title',
    strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'mulaidigital.com'))
)

@section('content')

@include('frontend.components.breadcrumb')

<section class="py-16 sm:py-20 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mb-14 text-center max-w-2xl mx-auto fade-slide opacity-0 translate-y-4">
            <span class="inline-flex items-center rounded-full
                           bg-primary-100 dark:bg-primary-900/50
                           px-3 py-1
                           text-xs font-medium tracking-wide
                           text-primary-800 dark:text-primary-300">
                {!! setting('product_badge', 'Produk') !!}
            </span>

            <h1 class="mt-4 text-2xl sm:text-3xl font-bold tracking-tight
                       text-zinc-900 dark:text-zinc-100">
                {{ $category->name }}
            </h1>

            @if($category->description)
            <p class="mt-3 text-sm sm:text-base
                       text-zinc-600 dark:text-zinc-400">
                {{ strip_tags($category->description) }}
            </p>
            @endif
        </div>

        {{-- Search --}}
        <div class="mb-12 flex justify-center fade-slide opacity-0 translate-y-4">
            <div class="relative w-full max-w-md">
                <input
                    type="text"
                    id="searchInput"
                    data-category="{{ $category->slug }}"
                    placeholder="{{ strip_tags(setting('product_search_placeholder', 'Cari produk...')) }}"
                    class="w-full rounded-xl border
                           border-zinc-300 dark:border-zinc-700
                           bg-white dark:bg-zinc-900
                           px-4 py-3 pl-10
                           text-sm sm:text-base
                           text-zinc-900 dark:text-zinc-100
                           placeholder:text-zinc-400
                           focus:outline-none
                           focus:ring-2 focus:ring-primary-500/30
                           transition">

                <x-heroicon-o-magnifying-glass
                    class="absolute left-3 top-3.5 h-5 w-5
                           text-zinc-500 dark:text-zinc-400" />
            </div>
        </div>

        {{-- Product Grid (Banner Style sesuai gambar) --}}
        <div
            id="productGrid"
            class="grid grid-cols-1 md:grid-cols-2
                   gap-5 sm:gap-6
                   fade-slide opacity-0 translate-y-4">
            @include('frontend.pages.products.partials.products-list', [
                'products' => $products,
                'category' => $category,
            ])
        </div>

        <div id="paginationWrapper"
            class="mt-14 fade-slide opacity-0 translate-y-4">
            {{ $products->links('pagination::tailwind') }}
        </div>

    </div>
</section>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll(".fade-slide");
        const searchInput = document.getElementById('searchInput');
        const productGrid = document.getElementById('productGrid');
        const paginationWrapper = document.getElementById('paginationWrapper');
        let timeout = null;
        let activeRequestId = 0;

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("opacity-0", "translate-y-4");
                    entry.target.classList.add("opacity-100", "translate-y-0");
                    entry.target.style.transition =
                        "all 0.7s cubic-bezier(0.4, 0, 0.2, 1)";
                }
            });
        }, {
            threshold: 0.1
        });

        elements.forEach(el => observer.observe(el));

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

                        productGrid.innerHTML = '<p class="col-span-full text-center text-zinc-500">Gagal memuat produk.</p>';
                        paginationWrapper.innerHTML = '';
                    });
            }, 300);
        });
    });
</script>
@endpush

@endsection