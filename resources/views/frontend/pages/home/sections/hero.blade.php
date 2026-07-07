<section id="hero"
    class="relative overflow-hidden bg-white dark:bg-zinc-950">

    <div class="swiper heroSwiper select-none">
        <div class="swiper-wrapper">

            @foreach ($heroes as $hero)
            @php
            $images = is_array($hero->images)
            ? $hero->images
            : json_decode($hero->images ?? '[]', true);

            $heroImage = $images[0] ?? $hero->image;
            @endphp

            <div class="swiper-slide">

                {{-- HERO AREA --}}
                <div class="relative h-full w-full overflow-hidden">

                    {{-- BACKGROUND IMAGE --}}
                    <img
                        src="{{ asset('storage/' . $heroImage) }}"
                        alt="{{ $hero->title }}"
                        loading="eager"
                        decoding="async"
                        class="absolute inset-0 h-full w-full object-cover" />

                    {{-- CONTENT: posisi bottom-left --}}
                    <div class="relative z-10 h-full flex items-end pb-8 md:pb-10">
                        <div class="container w-full px-0">

                            {{-- BOX / OVERLAY --}}
                            <div
                                class="fade-up bg-sky-900/75 backdrop-blur-sm rounded-tr-[40px] rounded-br-[40px] rounded-tl-lg rounded-bl-lg px-6 sm:px-8 py-6 sm:py-7 max-w-3xl 3xl:max-w-3xl">

                                {{-- ANIMASI --}}

                                {{-- EYEBROW / SUBTITLE --}}
                                @if ($hero->subtitle ?? false)
                                <p class="text-lg sm:text-xl font-normal text-white/90 tracking-wide mb-1">
                                    {{ $hero->subtitle }}
                                </p>
                                @endif

                                {{-- TITLE --}}
                                <h1
                                    class="text-2xl sm:text-3xl uppercase leading-relaxed tracking-tight text-white">
                                    {{ $hero->title }}
                                </h1>

                                {{-- DESCRIPTION (opsional) --}}
                                @if ($hero->description)
                                <h2
                                    class="text-2xl sm:text-5xl font-extrabold uppercase leading-[1.2] tracking-tight text-white"
                                    style="animation-delay:.1s">
                                    {{ $hero->description }}
                                </h2>
                                @endif

                                {{-- BUTTON PILL KECIL --}}
                                @if ($hero->button_text)
                                <div class="mt-4" style="animation-delay:.2s">
                                    <a href="{{ $hero->button_url ?? '#' }}"
                                        class="bg-white group inline-flex items-center gap-1.5 rounded-full border border-white/70 px-4 py-1.5 text-[11px] sm:text-xs font-semibold uppercase tracking-wide text-sky-900 hover:bg-white hover:text-sky-900 transition-all duration-300">

                                        {{ $hero->button_text }}

                                        <x-heroicon-o-arrow-right
                                            class="h-3.5 w-3.5 transition-transform duration-300 group-hover:translate-x-1" />
                                    </a>
                                </div>
                                @endif

                            </div>
                            {{-- END BOX --}}

                        </div>
                    </div>

                </div>

            </div>

            @endforeach

        </div>

        {{-- PAGINATION --}}
        <div class="absolute bottom-3 left-0 right-0 z-50 flex justify-center">
            <div class="swiper-pagination !static"></div>
        </div>

    </div>

</section>