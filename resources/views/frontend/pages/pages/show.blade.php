@extends('frontend.layouts.app')

@section(
'title',
strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'mulaidigital.com'))
)

@section('content')

{{-- ================= READING PROGRESS BAR ================= --}}
<div
    id="readingProgress"
    class="fixed top-0 left-0 z-50 h-[3px] w-0 bg-primary-900 dark:bg-primary-100 transition-all duration-300">
</div>

@include('frontend.components.breadcrumb')

<section class="py-16 sm:py-20 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- ================= CONTENT ================= --}}
        <div class="max-w-3xl mx-auto">

            {{-- TITLE --}}
            <h1 class="text-2xl sm:text-3xl
                       font-bold tracking-tight
                       text-zinc-900 dark:text-zinc-100">
                {{ $page->title }}
            </h1>

            {{-- META --}}
            @if($page->publish_at)
            <p class="mt-3 text-sm text-zinc-500 dark:text-zinc-400">
                {{ strip_tags(setting('blog_published_label', 'Dipublikasikan')) }}
                {{ \Carbon\Carbon::parse($page->publish_at)->translatedFormat('d F Y') }}
            </p>
            @endif

            {{-- THUMBNAIL --}}
            @if ($page->thumbnail)
            <div class="mt-8 sm:mt-10 overflow-hidden rounded-2xl border border-zinc-200 dark:border-zinc-800 shadow-md">
                <img
                    src="{{ asset('storage/' . $page->thumbnail) }}"
                    alt="{{ $page->title }}"
                    class="w-full object-cover transition-transform duration-500 hover:scale-105">
            </div>
            @endif

            {{-- CONTENT --}}
            <article
                id="articleContent"
                class="mt-10
                       prose prose-neutral dark:prose-invert
                       prose-sm sm:prose-base lg:prose-lg
                       max-w-none leading-relaxed
                       prose-headings:font-semibold prose-headings:tracking-tight
                       prose-a:text-primary-700 dark:prose-a:text-primary-400
                       prose-a:font-medium prose-a:no-underline hover:prose-a:underline
                       prose-blockquote:border-l-primary-500 dark:prose-blockquote:border-l-primary-400
                       prose-blockquote:bg-primary-50/50 dark:prose-blockquote:bg-primary-900/30
                       prose-blockquote:rounded-md prose-blockquote:px-4 prose-blockquote:py-2
                       prose-code:bg-zinc-100 dark:prose-code:bg-zinc-800
                       prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded
                       text-zinc-700 dark:text-zinc-300">
                {!! $page->content !!}
            </article>

            {{-- ================= SHARE ================= --}}
            <div class="mt-12 flex flex-wrap items-center gap-3
                        border-t border-zinc-200 dark:border-zinc-800 pt-6">

                <span class="text-sm text-zinc-500 dark:text-zinc-400">
                    {{ strip_tags(setting('blog_share_label', 'Bagikan')) }}
                </span>

                {{-- WhatsApp --}}
                <a
                    href="https://wa.me/?text={{ urlencode($page->title . ' — ' . url()->current()) }}"
                    target="_blank"
                    class="share-inline-btn">
                    <x-heroicon-o-chat-bubble-bottom-center-text class="w-5 h-5" />
                </a>

                {{-- Copy Link --}}
                <button
                    onclick="copyLink()"
                    class="share-inline-btn">
                    <x-heroicon-o-clipboard-document-check class="w-5 h-5" />
                </button>
            </div>

            {{-- BACK TO BLOG --}}
            <div class="mt-10 pt-6">
                <a
                    href="{{ route('pages.index') }}"
                    class="inline-flex items-center gap-2
                           text-sm font-medium
                           text-primary-700 dark:text-primary-400
                           hover:text-primary-900 dark:hover:text-primary-300
                           transition-colors">
                    ← {{ strip_tags(setting('blog_back_label', 'Kembali ke Blog')) }}
                </a>
            </div>

        </div>

        {{-- ================= RELATED ARTICLES ================= --}}
        @if(isset($relatedPages) && $relatedPages->count() > 0)
        <section class="mt-20 pt-20 border-t border-zinc-200 dark:border-zinc-800">

            <div class="max-w-6xl mx-auto">

                <div class="mb-10 flex items-center justify-between">
                    <h2 class="text-xl sm:text-2xl
                               font-bold tracking-tight
                               text-zinc-900 dark:text-zinc-100">
                        {{ strip_tags(setting('blog_related_title', 'Artikel Terkait')) }}
                    </h2>

                    <a
                        href="{{ route('pages.index') }}"
                        class="text-sm font-medium
                               text-primary-700 dark:text-primary-400
                               hover:text-primary-900 dark:hover:text-primary-300
                               transition-colors">
                        {{ strip_tags(setting('blog_view_all', 'Lihat Semua')) }} →
                    </a>
                </div>

                <div class="flex gap-6 overflow-x-auto pb-6
                            snap-x snap-mandatory
                            sm:grid sm:grid-cols-2
                            lg:grid-cols-3
                            sm:overflow-visible">

                    @foreach ($relatedPages as $item)
                    <article class="group snap-center shrink-0 w-[85%] sm:w-auto
                                    flex flex-col overflow-hidden
                                    rounded-2xl border
                                    border-zinc-200 dark:border-zinc-800
                                    bg-white dark:bg-zinc-900
                                    transition-all duration-300
                                    hover:-translate-y-1 hover:shadow-lg
                                    hover:border-primary-300 dark:hover:border-primary-700">

                        @if ($item->thumbnail)
                        <a href="{{ route('pages.show', $item->slug) }}">
                            <img
                                src="{{ asset('storage/' . $item->thumbnail) }}"
                                alt="{{ $item->title }}"
                                class="h-40 w-full object-cover
                                       transition-transform duration-500
                                       group-hover:scale-110">
                        </a>
                        @endif

                        <div class="flex flex-col flex-1 p-5">
                            <a href="{{ route('pages.show', $item->slug) }}">
                                <h3 class="text-sm sm:text-base
                                           font-semibold leading-snug
                                           text-zinc-900 dark:text-zinc-100
                                           line-clamp-2
                                           transition-colors
                                           group-hover:text-primary-700 dark:group-hover:text-primary-400">
                                    {{ $item->title }}
                                </h3>
                            </a>

                            <p class="mt-2 text-sm
                                       text-zinc-600 dark:text-zinc-400
                                       line-clamp-3">
                                {{ Str::limit(strip_tags($item->content), 120) }}
                            </p>
                        </div>
                    </article>
                    @endforeach

                </div>
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
                toast.show('Link berhasil disalin!', 'Link artikel telah disalin ke clipboard Anda.', 'success');
            })
            .catch(() => {
                toast.show('Gagal menyalin link', 'Silakan coba lagi.', 'error');
            });
    }

    /* Reading Progress Bar */
    window.addEventListener("scroll", () => {
        const article = document.getElementById("articleContent");
        const bar = document.getElementById("readingProgress");

        if (!article || !bar) return;

        const articleTop = article.offsetTop;
        const articleHeight = article.offsetHeight;
        const scrollPosition = window.scrollY + window.innerHeight;

        let progress = 0;
        if (scrollPosition > articleTop) {
            progress = Math.min(
                ((scrollPosition - articleTop) / (articleHeight + window.innerHeight - 100)) * 100,
                100
            );
        }

        bar.style.width = progress + "%";
    });
</script>

{{-- ================= STYLE ================= --}}
<style>
    .share-inline-btn {
        @apply inline-flex items-center justify-center w-10 h-10 rounded-lg border border-zinc-200 dark:border-zinc-800 text-zinc-600 dark:text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-800 hover:text-primary-700 dark:hover:text-primary-400 transition;
    }
</style>

@endsection
