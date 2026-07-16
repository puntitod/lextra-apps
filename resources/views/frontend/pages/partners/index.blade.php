@extends('frontend.layouts.app')

@section('title', $pageTitle ?? 'Partners')

@section('content')

<div class="bg-white dark:bg-zinc-950">
    <div class="bg-white dark:bg-zinc-950">

    {{-- ======================================================= --}}
    {{-- 2. PRINCIPAL PARTNERS                                    --}}
    {{-- ======================================================= --}}
    <section class="px-4 sm:px-6 lg:px-8 pt-14 pb-10 sm:pt-16 sm:pb-12">
        <div class="max-w-6xl mx-auto">

            <div class="fade-slide opacity-0 translate-y-4 flex items-center gap-4 mb-10">
                <span class="flex-1 h-px bg-zinc-200 dark:bg-zinc-800"></span>
                <div class="text-xs sm:text-sm font-bold uppercase tracking-[0.2em]
                           text-[#0B4F8A] dark:text-primary-400 whitespace-nowrap [&_p]:m-0">
                    {!! $principalHeading !!}
                </div>
                <span class="flex-1 h-px bg-zinc-200 dark:bg-zinc-800"></span>
            </div>

            <div class="fade-slide opacity-0 translate-y-4
                        grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5 sm:gap-6">
                @forelse ($principals as $principal)
                    <div class="group flex items-center justify-center
                                aspect-[3/2] rounded-xl border border-zinc-200 dark:border-zinc-800
                                bg-white dark:bg-zinc-900 p-6
                                transition-all duration-300
                                hover:shadow-lg hover:-translate-y-1
                                hover:border-[#0B4F8A]/30 dark:hover:border-primary-700">
                        <img
                            src="{{ $principal['logo'] }}"
                            alt="{{ $principal['name'] }}"
                            title="{{ $principal['name'] }}"
                            class="h-12 sm:h-14 w-auto object-contain
                                   grayscale opacity-70
                                   transition-all duration-300
                                   group-hover:grayscale-0 group-hover:opacity-100"
                            loading="lazy"
                        >
                    </div>
                @empty
                    <div class="col-span-full text-center text-sm text-zinc-500 dark:text-zinc-400 [&_p]:m-0">
                        {!! $principalEmpty !!}
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    {{-- ======================================================= --}}
    {{-- 3. OUR CLIENTS                                           --}}
    {{-- ======================================================= --}}
    <!-- <section class="px-4 sm:px-6 lg:px-8 pb-20 sm:pb-24">
        <div class="max-w-6xl mx-auto">

            <div class="fade-slide opacity-0 translate-y-4 flex items-center gap-4 mb-10">
                <span class="flex-1 h-px bg-zinc-200 dark:bg-zinc-800"></span>
                <div class="text-xs sm:text-sm font-bold uppercase tracking-[0.2em]
                           text-[#0B4F8A] dark:text-primary-400 whitespace-nowrap [&_p]:m-0">
                    {!! $clientsHeading !!}
                </div>
                <span class="flex-1 h-px bg-zinc-200 dark:bg-zinc-800"></span>
            </div>

            <div class="fade-slide opacity-0 translate-y-4
                        grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-6 gap-4 sm:gap-5">
                @forelse ($clients as $client)
                    <div class="group flex items-center justify-center
                                aspect-square rounded-xl border border-zinc-200 dark:border-zinc-800
                                bg-zinc-50 dark:bg-zinc-900/60 p-4
                                transition-all duration-300
                                hover:bg-white dark:hover:bg-zinc-900
                                hover:shadow-md hover:-translate-y-0.5">
                        <img
                            src="{{ $client['logo'] }}"
                            alt="{{ $client['name'] }}"
                            title="{{ $client['name'] }}"
                            class="h-9 sm:h-10 w-auto object-contain
                                   grayscale opacity-60
                                   transition-all duration-300
                                   group-hover:grayscale-0 group-hover:opacity-100"
                            loading="lazy"
                        >
                    </div>
                @empty
                    <div class="col-span-full text-center text-sm text-zinc-500 dark:text-zinc-400 [&_p]:m-0">
                        {!! $clientsEmpty !!}
                    </div>
                @endforelse
            </div>

        </div>
    </section> -->

    {{-- ======================================================= --}}
    {{-- 1. HERO SECTION                                          --}}
    {{-- ======================================================= --}}
    <section class="relative w-full overflow-hidden">

        {{-- Background --}}
        <img
            src="{{ $heroImage }}"
            alt="{{ strip_tags($articleTitle) }}"
            class="w-full h-[650px] object-cover object-center js-hero-bg">

        {{-- Overlay --}}
        <div
            class="absolute
                   left-0
                   bottom-16
                   z-30
                   w-[58%]
                   max-w-[900px]
                   bg-[#0B5C8C]/80
                   rounded-r-[60px]
                   px-14
                   py-10
                   js-hero-overlay">

            <h1
                class="text-white
                       font-extrabold
                       uppercase
                       leading-[1.08]
                       text-[42px]
                       [&_p]:m-0">

                {!! $articleTitle !!}

            </h1>

            
                <a href="{{ route('services.index') }}"
                class="inline-flex
                       mt-8
                       px-5
                       py-2
                       rounded-full
                       bg-white
                       text-[#0B5C8C]
                       text-[11px]
                       font-bold
                       uppercase
                       hover:bg-[#0B5C8C]
                       hover:text-white
                       transition
                       js-hero-btn">

                {!! strip_tags($articleButton) !!}

            </a>

        </div>

    </section>

    {{-- ======================================================= --}}
    {{-- 2. FOTO KIRI + TEKS KANAN                               --}}
    {{-- ======================================================= --}}
    <section id="article-detail" class="py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0 items-stretch">

                <div class="js-section-photo">
                    <img
                        src="{{ $sectionPhoto }}"
                        alt="Field photo"
                        class="w-full h-full object-cover"
                    >
                </div>

                <div class="px-0 md:pl-12 pt-8 md:pt-0 flex flex-col justify-center">

                    <div class="text-zinc-900 dark:text-zinc-100 text-xl md:text-2xl font-extrabold uppercase leading-tight mb-6 [&_p]:m-0 js-section-title">
                        {!! $sectionTitle !!}
                    </div>

                    <div class="text-zinc-600 dark:text-zinc-400 text-sm text-justify leading-relaxed mb-4 [&_p]:m-0 js-section-para" style="animation-delay: .1s;">
                        {!! $para1 !!}
                    </div>

                    <div class="text-zinc-600 dark:text-zinc-400 text-sm text-justify leading-relaxed mb-4 [&_p]:m-0 js-section-para" style="animation-delay: .18s;">
                        {!! $para2 !!}
                    </div>

                    <div class="text-zinc-600 dark:text-zinc-400 text-sm text-justify leading-relaxed mb-6 [&_p]:m-0 js-section-para" style="animation-delay: .26s;">
                        {!! $para3 !!}
                    </div>

                    <div class="text-zinc-900 dark:text-zinc-100 text-sm text-justify font-bold [&_p]:m-0 js-section-tagline" style="animation-delay: .34s;">
                        {!! $tagline !!}
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ======================================================= --}}
    {{-- 3. GRID 4 FOTO                                           --}}
    {{-- ======================================================= --}}
    <section class="pb-12 md:pb-16">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-1">
                @foreach ($galleryPhotos as $index => $photo)
                    <div class="overflow-hidden js-gallery-photo"
                         style="animation-delay: {{ $index * 0.1 }}s;">
                        <img
                            src="{{ $photo }}"
                            alt="Gallery photo"
                            class="w-full h-52 md:h-64 object-cover
                                   hover:scale-105 transition-transform duration-500"
                        >
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ======================================================= --}}
    {{-- 4. VIDEO SECTION                                          --}}
    {{-- ======================================================= --}}
    <section class="pb-16 md:pb-24">
        <div class="max-w-3xl mx-auto px-6 md:px-12 js-video-section">
            <div class="relative bg-black rounded overflow-hidden shadow-2xl">
                <video
                    controls
                    class="w-full"
                    poster="{{ $heroImage }}"
                >
                    <source src="{{ $videoSrc }}" type="video/mp4">
                    Browser Anda tidak mendukung tag video.
                </video>

                <div class="bg-black px-4 py-2 text-center">
                    <span class="text-white text-xs font-semibold tracking-wide [&_p]:m-0">
                        {!! $videoLabel !!}
                    </span>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const targets = document.querySelectorAll(
            '.js-hero-overlay, .js-section-photo, .js-section-title, ' +
            '.js-section-para, .js-section-tagline, .js-gallery-photo, ' +
            '.js-video-section'
        );

        if (!targets.length) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('is-visible');
                    void entry.target.offsetWidth;
                    entry.target.classList.add('is-visible');
                } else {
                    entry.target.classList.remove('is-visible');
                }
            });
        }, {
            threshold: 0.15
        });

        targets.forEach((el) => observer.observe(el));
    });
</script>

@endsection