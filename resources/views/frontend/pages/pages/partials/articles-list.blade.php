{{-- LOADING SKELETON --}}
@if ($loading ?? false)
@include('frontend.pages.pages.partials.skeleton')

@elseif ($pages->isEmpty())
@include('frontend.pages.pages.partials.empty')

@else
@foreach ($pages as $page)
<article
    class="
                group flex flex-col overflow-hidden
                rounded-2xl border
                border-neutral-200 dark:border-neutral-800
                bg-white dark:bg-neutral-900
                transition-all duration-300
                hover:-translate-y-1 hover:shadow-md
                dark:hover:border-neutral-700
                focus-within:ring-2 focus-within:ring-neutral-400/40
            ">

    {{-- THUMBNAIL --}}
    <a href="{{ route('pages.show', $page->slug) }}"
        class="relative block overflow-hidden">

        @if($page->publish_at)
        <span
            class="
                            absolute top-3 right-3 z-10
                            inline-flex items-center
                            rounded-md
                            px-2.5 py-1
                            text-[11px] sm:text-xs
                            font-medium
                            backdrop-blur
                            bg-white/80
                            text-neutral-700
                            border border-neutral-200/70
                            shadow-sm
                            dark:bg-neutral-900/80
                            dark:text-neutral-300
                            dark:border-neutral-700/70
                        ">
            {{ \Carbon\Carbon::parse($page->publish_at)->translatedFormat('d M Y') }}
        </span>
        @endif

        <img
            src="{{ asset('storage/' . $page->thumbnail) }}"
            alt="{{ $page->title }}"
            class="
                        h-52 w-full object-cover
                        transition-transform duration-300
                        group-hover:scale-105
                    ">
    </a>

    {{-- CONTENT --}}
    <div class="flex flex-col flex-1 p-5 sm:p-6">

        <a href="{{ route('pages.show', $page->slug) }}">
            <h2
                class="
                            text-base sm:text-lg
                            font-semibold leading-snug
                            text-neutral-900 dark:text-neutral-100
                            transition-colors
                            group-hover:text-neutral-700
                            dark:group-hover:text-neutral-300
                            line-clamp-2
                        ">
                {{ $page->title }}
            </h2>
        </a>

        <p
            class="
                        mt-3
                        text-sm leading-relaxed
                        text-neutral-600 dark:text-neutral-400
                        line-clamp-3
                    ">
            {{ Str::limit(strip_tags($page->content), 140) }}
        </p>

    </div>
</article>
@endforeach
@endif
