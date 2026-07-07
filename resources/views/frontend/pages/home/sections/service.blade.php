<section class="py-20 sm:py-24 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-6 sm:px-12 lg:px-20">

        {{-- HEADER --}}
        <div class="mx-auto max-w-2xl text-center mb-16">

            {{-- BADGE --}}
            <span
                class="inline-flex items-center rounded-full
                       bg-primary-100 dark:bg-primary-900/50
                       px-3 py-1.5
                       text-xs font-medium tracking-wide
                       text-primary-800 dark:text-primary-300">
                {{ strip_tags(setting('service_badge', 'Layanan Kami')) }}
            </span>

            {{-- TITLE (font size tidak diubah) --}}
            <h2
                class="mt-4
                       text-xl sm:text-2xl lg:text-3xl
                       font-semibold tracking-tight leading-tight
                       text-zinc-900 dark:text-zinc-100">
                {{ strip_tags(setting('title_section_service', 'Layanan yang Kami Sediakan')) }}
            </h2>

            {{-- DESCRIPTION (font size tidak diubah) --}}
            <p
                class="mt-4
                       text-sm sm:text-base
                       leading-relaxed
                       text-zinc-600 dark:text-zinc-400">
                {{ strip_tags(setting(
                    'subtitle_section_service',
                    'Berbagai layanan profesional untuk mendukung kebutuhan bisnis dan transformasi digital Anda.'
                )) }}
            </p>
        </div>

        {{-- SERVICES --}}
        <div
            class="flex gap-5 overflow-x-auto pb-6
                   snap-x snap-mandatory
                   sm:grid sm:grid-cols-2
                   lg:grid-cols-3
                   sm:gap-6
                   sm:overflow-visible">

            @forelse ($services->take(3) as $service)
            <article
                class="snap-center shrink-0 w-[80%] sm:w-auto
                       rounded-2xl border
                       border-zinc-200 dark:border-zinc-800
                       bg-white dark:bg-zinc-900
                       p-6
                       transition-all duration-200
                       hover:border-primary-300 dark:hover:border-primary-700
                       hover:shadow-md">

                {{-- ICON (pakai primary subtle) --}}
                @if ($service->icon)
                <div
                    class="mb-4 flex h-11 w-11
                           items-center justify-center
                           rounded-lg
                           bg-primary-100 dark:bg-primary-900/50
                           ring-1 ring-primary-200 dark:ring-primary-800/30">
                    <img
                        src="{{ asset('storage/' . $service->icon) }}"
                        alt="{{ $service->getName() }}"
                        loading="lazy"
                        class="h-6 w-6 object-contain" />
                </div>
                @endif

                {{-- TITLE (font size sama) --}}
                <h3
                    class="text-base lg:text-lg
                           font-medium tracking-tight
                           text-zinc-900 dark:text-zinc-100">
                    {{ $service->getName() }}
                </h3>

                {{-- DESCRIPTION (font size sama) --}}
                <p
                    class="mt-2
                           text-sm
                           leading-relaxed
                           text-zinc-600 dark:text-zinc-400
                           line-clamp-3">
                    {{ \Illuminate\Support\Str::limit(
                        strip_tags($service->getDescription()),
                        160
                    ) }}
                </p>

            </article>
            @empty
            <p class="text-center text-zinc-500 col-span-full">
                Belum ada layanan.
            </p>
            @endforelse
        </div>

        {{-- CTA BUTTON (pakai primary full, konsisten dengan navbar & hero) --}}
        <div class="mt-16 text-center">
            <a
                href="{{ route('services.index') }}"
                class="inline-flex items-center gap-2
                       rounded-md
                       bg-primary-900 dark:bg-primary-100
                       px-6 py-3
                       text-sm sm:text-base
                       font-medium
                       text-white dark:text-primary-900
                       shadow-sm
                       hover:bg-primary-800 dark:hover:bg-primary-200
                       transition">
                {{ strip_tags(setting('cta_service', 'Lihat Semua Layanan')) }}
                <span aria-hidden="true">→</span>
            </a>
        </div>

    </div>
</section>
