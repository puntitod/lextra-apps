@extends('frontend.layouts.app')

@section(
'title',
strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'mulaidigital.com'))
)

@section('content')

{{-- Breadcrumb --}}
@include('frontend.components.breadcrumb')

<section class="py-16 sm:py-20 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- ================= HEADER ================= --}}
        <div class="mb-14 text-center max-w-2xl mx-auto fade-slide opacity-0 translate-y-4">

            {{-- BADGE --}}
            <span class="inline-flex items-center rounded-full
                           bg-primary-100 dark:bg-primary-900/50
                           px-3 py-1
                           text-xs font-medium tracking-wide
                           text-primary-800 dark:text-primary-300">
                {!! setting('blog_badge', 'Blog') !!}
            </span>

            {{-- TITLE --}}
            <h1 class="mt-4
                       text-2xl sm:text-3xl lg:text-3xl
                       font-bold tracking-tight
                       text-zinc-900 dark:text-zinc-100">
                {!! setting('blog_title', 'Blog Terbaru') !!}
            </h1>

            {{-- SUBTITLE --}}
            <p class="mt-3
                       text-sm sm:text-base
                       text-zinc-600 dark:text-zinc-400">
                {!! setting(
                'blog_subtitle',
                'Update terbaru tentang teknologi, inovasi digital, dan perjalanan startup.'
                ) !!}
            </p>
        </div>

        {{-- ================= SEARCH ================= --}}
        <div class="mb-12 flex justify-center fade-slide opacity-0 translate-y-4">
            <div class="relative w-full max-w-md">
                <input
                    type="text"
                    id="searchInput"
                    placeholder="{{ strip_tags(setting('blog_search_placeholder', 'Cari artikel...')) }}"
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

        {{-- ================= GRID ================= --}}
        <div
            id="articlesGrid"
            class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3
                   gap-4 sm:gap-6 lg:gap-8
                   fade-slide opacity-0 translate-y-4">

            @forelse ($pages as $page)
            <article class="group flex flex-col overflow-hidden
                            rounded-2xl border
                            border-zinc-200 dark:border-zinc-800
                            bg-white dark:bg-zinc-900
                            transition-all duration-300
                            hover:-translate-y-1 hover:shadow-lg
                            hover:border-primary-300 dark:hover:border-primary-700">

                {{-- THUMBNAIL --}}
                <a href="{{ route('pages.show', $page->slug) }}"
                    class="relative block overflow-hidden rounded-t-2xl">

                    {{-- DATE BADGE --}}
                    @if($page->publish_at)
                    <span class="absolute top-3 right-3 z-10
                                  inline-flex items-center
                                  rounded-md px-2.5 py-1
                                  text-[11px] sm:text-xs font-medium
                                  backdrop-blur
                                  bg-white/90 dark:bg-zinc-900/90
                                  text-zinc-700 dark:text-zinc-300
                                  border border-zinc-200/70 dark:border-zinc-700/70
                                  shadow-sm">
                        {{ \Carbon\Carbon::parse($page->publish_at)->translatedFormat('d M Y') }}
                    </span>
                    @endif

                    {{-- IMAGE --}}
                    <img
                        src="{{ asset('storage/' . $page->thumbnail) }}"
                        alt="{{ $page->title }}"
                        class="h-40 sm:h-52 w-full object-cover
                               transition-transform duration-500 ease-out
                               group-hover:scale-110">
                </a>

                {{-- CONTENT --}}
                <div class="flex flex-col flex-1 p-5 sm:p-6">
                    <a href="{{ route('pages.show', $page->slug) }}">
                        <h2 class="text-base sm:text-lg
                                   font-semibold leading-snug
                                   text-zinc-900 dark:text-zinc-100
                                   transition-colors
                                   group-hover:text-primary-700 dark:group-hover:text-primary-400
                                   line-clamp-2">
                            {{ $page->title }}
                        </h2>
                    </a>

                    <p class="mt-3
                               text-sm leading-relaxed
                               text-zinc-600 dark:text-zinc-400
                               line-clamp-3">
                        {{ Str::limit(strip_tags($page->content), 140) }}
                    </p>
                </div>
            </article>

            @empty
            <div class="col-span-full text-center py-20">
                <p class="text-sm text-zinc-600 dark:text-zinc-400">
                    Belum ada artikel yang tersedia.
                </p>
            </div>
            @endforelse
        </div>

        {{-- ================= PAGINATION ================= --}}
        <div class="mt-14 fade-slide opacity-0 translate-y-4">
            {{ $pages->links('pagination::tailwind') }}
        </div>

    </div>
</section>

@endsection

{{-- ================= FADE ANIMATION ================= --}}
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll(".fade-slide");

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
    });
</script>
