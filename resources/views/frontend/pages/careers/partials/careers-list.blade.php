@forelse ($careers as $career)
<article class="group overflow-hidden rounded-2xl border
                border-zinc-200 dark:border-zinc-800
                bg-white dark:bg-zinc-900
                transition-all duration-300
                hover:-translate-y-1 hover:shadow-lg
                hover:border-primary-300 dark:hover:border-primary-700">

    <a href="{{ route('careers.show', $career->slug) }}"
        class="relative block aspect-[3/4] overflow-hidden bg-zinc-100 dark:bg-zinc-800">
        @if($career->thumbnail)
        <img
            src="{{ asset('storage/' . $career->thumbnail) }}"
            alt="{{ $career->localized_title }}"
            loading="lazy"
            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
        @else
        <div class="flex h-full w-full items-center justify-center px-6 text-center">
            <span class="text-sm font-medium text-zinc-500 dark:text-zinc-400">
                {{ $career->localized_title }}
            </span>
        </div>
        @endif
    </a>

    <div class="p-5 sm:p-6">
        <a href="{{ route('careers.show', $career->slug) }}">
            <h2 class="text-base sm:text-lg font-semibold
                       text-zinc-900 dark:text-zinc-100
                       line-clamp-2">
                {{ $career->localized_title }}
            </h2>
        </a>

        <div class="mt-3 rounded-lg bg-zinc-50 px-3 py-2 text-sm text-zinc-600
                    dark:bg-zinc-800/70 dark:text-zinc-300">
            @if($career->open_date || $career->close_date)
            <div class="flex flex-col gap-1">
                <span>
                    <span class="font-medium text-zinc-800 dark:text-zinc-100">Dibuka:</span>
                    {{ $career->open_date?->format('d M Y') ?? 'Sekarang' }}
                </span>

                <span>
                    <span class="font-medium text-zinc-800 dark:text-zinc-100">Ditutup:</span>
                    {{ $career->close_date?->format('d M Y') ?? 'Belum ditentukan' }}
                </span>
            </div>
            @else
            <span>
                <span class="font-medium text-zinc-800 dark:text-zinc-100">Status:</span>
                {{ strip_tags(setting('career_open_label', 'Dibuka')) }}
            </span>
            @endif
        </div>

        @if($career->localized_description)
        <p class="mt-3 text-sm text-zinc-600 dark:text-zinc-400 line-clamp-3">
            {{ Str::limit(strip_tags($career->localized_description), 120) }}
        </p>
        @endif
    </div>
</article>
@empty
@include('frontend.pages.careers.partials.empty')
@endforelse
