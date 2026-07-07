<section class="py-16 sm:py-20 lg:py-24 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-6 sm:px-12 lg:px-20">

        {{-- ================= HEADER ================= --}}
        <div class="mb-12 lg:mb-16">
            <div class="mb-6">
                <span class="inline-flex items-center rounded-full
                               bg-primary-100 dark:bg-primary-900/50
                               px-3 py-1.5
                               text-xs font-medium tracking-wide
                               text-primary-800 dark:text-primary-300">
                    {{ strip_tags(setting('blog_badge', 'Blog')) }}
                </span>
            </div>

            <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div class="max-w-2xl">
                    <h2 class="text-xl sm:text-2xl lg:text-3xl
                               font-semibold tracking-tight leading-tight
                               text-zinc-900 dark:text-zinc-100">
                        {{ strip_tags(setting('blog_title', 'Blog Terbaru')) }}
                    </h2>

                    <p class="mt-4 text-sm sm:text-base leading-relaxed
                               text-zinc-600 dark:text-zinc-400">
                        {{ strip_tags(setting('blog_subtitle', 'Update terbaru tentang teknologi, inovasi digital.')) }}
                    </p>
                </div>

                <a href="{{ route('pages.index') }}"
                    class="inline-flex items-center gap-2
                          text-sm sm:text-base font-medium
                          text-primary-700 dark:text-primary-400
                          hover:text-primary-900 dark:hover:text-primary-300
                          transition-colors">
                    {{ strip_tags(setting('blog_cta', 'Lihat semua')) }}
                    <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>

        {{-- ================= ARTICLES DISPLAY ================= --}}
        <!-- Mobile: Horizontal Scrollable Carousel -->
        <div class="block lg:hidden -mx-6 px-6 overflow-x-auto scrollbar-hide pb-4">
            <div class="flex gap-4">
                @forelse ($pages as $page)
                @php
                $excerpt = \Illuminate\Support\Str::limit(strip_tags($page->content), 140);
                @endphp
                <article class="flex-none w-[80%] group flex flex-col overflow-hidden rounded-2xl border
                                border-zinc-200 dark:border-zinc-800
                                bg-white dark:bg-zinc-900
                                transition-all duration-300
                                hover:shadow-lg">
                    <a href="{{ route('pages.show', $page->slug) }}"
                        class="relative block overflow-hidden rounded-t-2xl">
                        <img src="{{ asset('storage/' . $page->thumbnail) }}"
                            onerror="this.src='{{ asset('assets-default/placeholder.jpg') }}'"
                            alt="{{ $page->title }}"
                            loading="lazy"
                            class="h-48 w-full object-cover
                                    transition-transform duration-500 ease-out
                                    group-hover:scale-110">
                    </a>

                    <div class="flex flex-col flex-1 p-5">
                        <a href="{{ route('pages.show', $page->slug) }}" class="block">
                            <h3 class="text-base font-semibold text-zinc-900 dark:text-zinc-100 line-clamp-2
                                       transition-colors group-hover:text-primary-700 dark:group-hover:text-primary-400">
                                {{ $page->title }}
                            </h3>
                        </a>

                        <p class="mt-3 text-sm text-zinc-600 dark:text-zinc-400 line-clamp-3">
                            {{ $excerpt }}
                        </p>
                    </div>
                </article>
                @empty
                <p class="text-sm text-zinc-600 dark:text-zinc-400 py-8">
                    Belum ada artikel blog.
                </p>
                @endforelse
            </div>
        </div>

        <!-- Desktop: Grid 3 Kolom -->
        <div class="hidden lg:grid lg:grid-cols-3 lg:gap-8">
            @forelse ($pages as $page)
            @php
            $excerpt = \Illuminate\Support\Str::limit(strip_tags($page->content), 140);
            @endphp
            <article class="group flex flex-col overflow-hidden rounded-2xl border
                            border-zinc-200 dark:border-zinc-800
                            bg-white dark:bg-zinc-900
                            transition-all duration-300
                            hover:shadow-lg hover:-translate-y-1">
                <a href="{{ route('pages.show', $page->slug) }}"
                    class="relative block overflow-hidden rounded-t-2xl">
                    <img src="{{ asset('storage/' . $page->thumbnail) }}"
                        onerror="this.src='{{ asset('assets-default/placeholder.jpg') }}'"
                        alt="{{ $page->title }}"
                        loading="lazy"
                        class="h-56 w-full object-cover
                                transition-transform duration-500 ease-out
                                group-hover:scale-110">
                </a>

                <div class="flex flex-col flex-1 p-6">
                    <a href="{{ route('pages.show', $page->slug) }}" class="block">
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100 line-clamp-2
                                   transition-colors group-hover:text-primary-700 dark:group-hover:text-primary-400">
                            {{ $page->title }}
                        </h3>
                    </a>

                    <p class="mt-3 text-sm text-zinc-600 dark:text-zinc-400 line-clamp-3">
                        {{ $excerpt }}
                    </p>
                </div>
            </article>
            @empty
            <div class="col-span-full text-center py-20">
                <p class="text-sm text-zinc-600 dark:text-zinc-400">
                    Belum ada artikel blog.
                </p>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- ================= STYLES (sembunyikan scrollbar) ================= --}}
<style>
    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }
</style>
