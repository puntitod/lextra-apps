@extends('frontend.layouts.app')

@section(
'title',
strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'mulaidigital.com'))
)

@section('content')

{{-- ================= READING PROGRESS ================= --}}
<div
    id="readingProgress"
    class="fixed top-0 left-0 z-50 h-[3px] w-0 bg-primary-900 dark:bg-primary-100 transition-all duration-300">
</div>

@include('frontend.components.breadcrumb')

<section class="py-16 sm:py-20 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            {{-- ================= IMAGES ================= --}}
            <div class="space-y-4">
                @if(is_array($product->images) && count($product->images))
                <div class="overflow-hidden rounded-2xl border border-zinc-200 dark:border-zinc-800 shadow-md">
                    <img
                        src="{{ asset('storage/' . $product->images[0]) }}"
                        alt="{{ $product->name }}"
                        class="w-full object-cover transition-transform duration-500 hover:scale-105">
                </div>

                @if(count($product->images) > 1)
                <div class="grid grid-cols-4 gap-3">
                    @foreach(array_slice($product->images, 1) as $img)
                    <div class="overflow-hidden rounded-xl border border-zinc-200 dark:border-zinc-800">
                        <img
                            src="{{ asset('storage/' . $img) }}"
                            class="h-24 w-full object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    @endforeach
                </div>
                @endif
                @endif
            </div>

            {{-- ================= INFO ================= --}}
            <div>

                {{-- TITLE --}}
                <h1 class="text-2xl sm:text-3xl font-bold text-zinc-900 dark:text-zinc-100">
                    {{ $product->name }}
                </h1>

                {{-- PRICE --}}
                <div class="mt-4 text-xl font-semibold">
                    @if($product->sale_price)
                    <span class="text-primary-700 dark:text-primary-400">
                        Rp{{ number_format($product->sale_price) }}
                    </span>
                    <span class="ml-3 text-base line-through text-zinc-400 dark:text-zinc-500">
                        Rp{{ number_format($product->price) }}
                    </span>
                    @else
                    <span class="text-zinc-900 dark:text-zinc-100">
                        Rp{{ number_format($product->price) }}
                    </span>
                    @endif
                </div>

                {{-- DESCRIPTION --}}
                @if($product->description)
                <article
                    id="productContent"
                    class="mt-6
           prose prose-neutral dark:prose-invert
           prose-sm sm:prose-base
           max-w-none leading-relaxed

           prose-headings:font-semibold
           prose-headings:tracking-tight

           prose-a:text-primary-700 dark:prose-a:text-primary-400
           prose-a:font-medium
           prose-a:no-underline hover:prose-a:underline

           prose-blockquote:border-l-primary-500
           dark:prose-blockquote:border-l-primary-400
           prose-blockquote:bg-primary-50/50
           dark:prose-blockquote:bg-primary-900/30
           prose-blockquote:rounded-md
           prose-blockquote:px-4 prose-blockquote:py-2

           prose-code:bg-zinc-100 dark:prose-code:bg-zinc-800
           prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded

           /* 🔥 LIST FIX */
           [&_ol]:list-decimal
           [&_ol]:pl-6
           [&_ul]:list-disc
           [&_ul]:pl-6
           [&_li]:my-1
           [&_li::marker]:text-zinc-500

           text-zinc-700 dark:text-zinc-300">
                    {!! $product->description !!}
                </article>
                @endif

                {{-- ACTION --}}
                <div class="mt-8 flex flex-wrap gap-3">
                    @if($product->pdf_file && file_exists(storage_path('app/public/' . $product->pdf_file)))
        <a href="{{ asset('storage/' . $product->pdf_file) }}"
           target="_blank"
           rel="noopener noreferrer"
           class="inline-flex items-center gap-2 rounded-xl
                  bg-white border border-zinc-300 dark:border-zinc-700
                  dark:bg-zinc-800
                  px-6 py-3 text-sm font-semibold
                  text-zinc-700 dark:text-zinc-200
                  hover:bg-zinc-50 dark:hover:bg-zinc-700
                  shadow-sm transition">
            <x-heroicon-o-document-arrow-down class="w-5 h-5" />
            Download Brochure
        </a>
    @endif
    
                    <a
                        href="https://wa.me/{{ strip_tags(setting('whatsapp_number')) }}?text={{ urlencode('Halo, saya tertarik dengan produk: ' . $product->name) }}"
                        target="_blank"
                        class="inline-flex items-center gap-2 rounded-xl
                               bg-primary-900 dark:bg-primary-100
                               px-6 py-3 text-sm font-semibold text-white dark:text-primary-900
                               hover:bg-primary-800 dark:hover:bg-primary-200
                               shadow-sm
                               focus:outline-none focus:ring-2 focus:ring-primary-500/50
                               transition">
                        <x-heroicon-o-check-badge class="w-5 h-5" />
                        {{ strip_tags(setting('product_cta', 'Pesan via WhatsApp')) }}
                    </a>
                </div>

                {{-- SHARE --}}
                <div class="mt-8 flex items-center gap-3">
                    <span class="text-sm text-zinc-500 dark:text-zinc-400">
                        {{ strip_tags(setting('product_share_label', 'Bagikan')) }} :
                    </span>

                    <a
                        href="https://wa.me/?text={{ urlencode($product->name . ' — ' . url()->current()) }}"
                        target="_blank"
                        class="share-inline-btn">
                        <x-heroicon-o-chat-bubble-bottom-center-text class="w-5 h-5" />
                    </a>

                    <button
                        onclick="copyLink()"
                        class="share-inline-btn">
                        <x-heroicon-o-clipboard-document-check class="w-5 h-5" />
                    </button>
                </div>

            </div>
        </div>

        {{-- ================= RELATED PRODUCTS ================= --}}
        @if($relatedProducts->count())
        <section class="mt-20 pt-20 border-t border-zinc-200 dark:border-zinc-800">

            <div class="mb-10 sm:mb-12 flex items-center justify-between">
                <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-zinc-900 dark:text-zinc-100">
                    Produk Terkait
                </h2>

                <a href="{{ route('products.category', $category->slug) }}"
                    class="text-sm sm:text-base font-medium text-primary-700 dark:text-primary-400
                  hover:text-primary-900 dark:hover:text-primary-300 transition-colors">
                    Lihat Semua →
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12 sm:mb-8 lg:mb-0">

                @foreach($relatedProducts as $item)
                <article class="group flex flex-col overflow-hidden rounded-2xl border
                        border-zinc-200 dark:border-zinc-800
                        bg-white dark:bg-zinc-900
                        transition-all duration-300
                        hover:shadow-xl hover:border-primary-300 dark:hover:border-primary-700
                        hover:-translate-y-1">

                    <!-- Gambar -->
                    <a href="{{ route('products.show', [
                        'categorySlug' => $category->slug,
                        'productSlug' => $item->slug,
                    ]) }}"
                        class="block overflow-hidden rounded-t-2xl">
                        <img src="{{ asset('storage/' . ($item->thumbnail ?? $item->images[0] ?? 'placeholder.jpg')) }}"
                            alt="{{ $item->name }}"
                            class="h-48 w-full object-cover
                            transition-transform duration-500 ease-out
                            group-hover:scale-110">
                    </a>

                    <!-- Konten -->
                    <div class="flex flex-col flex-1 p-5">

                        <!-- Nama Produk -->
                        <a href="{{ route('products.show', [
                            'categorySlug' => $category->slug,
                            'productSlug' => $item->slug,
                        ]) }}" class="block">
                            <h3 class="text-base font-semibold text-zinc-900 dark:text-zinc-100 line-clamp-2
                               group-hover:text-primary-700 dark:group-hover:text-primary-400 transition-colors">
                                {{ $item->name }}
                            </h3>
                        </a>

                        <!-- Deskripsi Singkat -->
                        <p class="mt-3 text-sm text-zinc-600 dark:text-zinc-400 line-clamp-2">
                            {{ Str::limit(strip_tags($item->description ?? ''), 100) }}
                        </p>

                        <!-- Harga -->
                        <div class="mt-4 font-semibold">
                            @if($item->sale_price && $item->sale_price < $item->price)
                                <div class="flex items-baseline gap-2">
                                    <span class="text-lg text-primary-700 dark:text-primary-400">
                                        Rp{{ number_format($item->sale_price) }}
                                    </span>
                                    <span class="text-sm line-through text-zinc-400 dark:text-zinc-500">
                                        Rp{{ number_format($item->price) }}
                                    </span>
                                </div>
                                @else
                                <span class="text-lg text-zinc-900 dark:text-zinc-100">
                                    Rp{{ number_format($item->final_price ?? $item->price) }}
                                </span>
                                @endif
                        </div>

                    </div>
                </article>
                @endforeach

            </div>

        </section>
        @endif

    </div>
</section>

{{-- ================= SCRIPT ================= --}}
<script>
    function copyLink() {
        navigator.clipboard.writeText(window.location.href)
            .then(() => {
                toast.show('Link berhasil disalin!', 'Link produk telah disalin ke clipboard Anda.', 'success');
            })
            .catch(() => {
                toast.show('Gagal menyalin link', 'Silakan coba lagi.', 'error');
            });
    }
</script>

@endsection
