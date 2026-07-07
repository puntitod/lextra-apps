@extends('frontend.layouts.app')

@section('title', $pageTitle ?? 'News & Highlight')

@section('content')

    <div class="bg-white dark:bg-zinc-950">

        {{-- 1. GRID NEWS --}}
        <section class="py-6 bg-white dark:bg-zinc-950">

            <div class="max-w-[1600px] mx-auto px-8">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                    @foreach ($newsCards as $index => $card)

                        {{-- href pakai $card['link'] kalau ada, fallback ke route news.show --}}
                        @php
                            $cardLink = !empty($card['link'])
                                ? $card['link']
                                : route('news.show', $card['slug']);

                            $isExternal = !empty($card['link'])
                                && str_starts_with($card['link'], 'http');
                        @endphp

                        <a href="{{ $cardLink }}" class="group block js-news-card" style="animation-delay: {{ $index * 0.1 }}s;"
                            @if($isExternal) target="_blank" rel="noopener noreferrer" @endif>

                            <div class="relative h-[210px] md:h-[240px] overflow-hidden border border-gray-300 bg-white">

                                {{-- IMAGE --}}
                                <img src="{{ $card['image'] }}" alt="{{ $card['title'] }}"
                                    class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-105">

                                {{-- CARD TEXT --}}
                                <div class="absolute left-1/2 -translate-x-1/2 -bottom-1 w-[82%] z-20">

                                    <div class="bg-[#0B5C8C]/80 rounded-[20px] px-6 py-3 shadow-lg">

                                        <h3 class="text-white text-center font-semibold
                                                   text-[13px] md:text-[15px]
                                                   leading-snug">
                                            {{ $card['title'] }}
                                        </h3>

                                        <div class="flex justify-center mt-2">

                                            <span class="inline-flex
                                                       items-center
                                                       justify-center
                                                       bg-white
                                                       text-[#0B5C8C]
                                                       rounded-full
                                                       px-4
                                                       py-[3px]
                                                       text-[9px]
                                                       font-bold
                                                       uppercase
                                                       tracking-wide
                                                       js-read-more">
                                                {!! strip_tags($readMoreLabel) !!}
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </a>

                    @endforeach

                </div>

            </div>

        </section>

        {{-- ======================================================= --}}
        {{-- 2. NEWS AND HIGHLIGHT --}}
        {{-- ======================================================= --}}
        <section class="w-full">

            <div class="w-full bg-[#0B5C8C] py-7">

                <h2 class="text-center
                           text-white
                           font-extrabold
                           text-2xl
                           md:text-4xl
                           uppercase
                           tracking-wide
                           js-news-heading">

                    {!! $newsHighlightHeading !!}

                </h2>

            </div>

        </section>

        {{-- ======================================================= --}}
        {{-- 3. FEATURED ARTICLE --}}
        {{-- ======================================================= --}}
        <section class="w-full bg-white pb-12">

            <div class="relative w-full h-[380px] md:h-[620px] overflow-hidden">

                {{-- IMAGE --}}
                <img src="{{ $featuredImage }}" alt="{{ strip_tags($featuredTitle) }}"
                    class="w-full h-full object-cover object-center js-featured-img">

                {{-- CARD OVERLAY --}}
                <div class="absolute
                           left-1/2
                           bottom-0
                           -translate-x-1/2
                           w-[90%]
                           md:w-[88%]
                           bg-[#0B5C8C]/85
                           rounded-t-[28px]
                           px-6
                           md:px-12
                           py-8
                           md:py-10
                           js-featured-card">

                    <div class="flex flex-col items-center">

                        <h2 class="text-white
                                   font-extrabold
                                   text-center
                                   text-[24px]
                                   md:text-[30px]
                                   leading-tight
                                   max-w-5xl">

                            {!! $featuredTitle !!}

                        </h2>

                        <a href="{{ $featuredSourceUrl }}" target="_blank" class="mt-5
                                   inline-flex
                                   items-center
                                   justify-center
                                   bg-white
                                   text-[#0B5C8C]
                                   text-[10px]
                                   font-bold
                                   uppercase
                                   tracking-wide
                                   rounded-full
                                   px-5
                                   py-1.5
                                   transition
                                   hover:bg-[#0B5C8C]
                                   hover:text-white
                                   js-read-more">

                            {!! strip_tags($readMoreLabel) !!}

                        </a>

                    </div>

                </div>

            </div>

        </section>

        {{-- ======================================================= --}}
        {{-- 4. ISI ARTIKEL --}}
        {{-- ======================================================= --}}
        <section class="py-12 md:py-16 bg-white dark:bg-zinc-950">
            <div class="max-w-8xl mx-auto px-6 md:px-8">

                {{-- Body artikel --}}
                <div class="text-zinc-700 dark:text-zinc-300 text-sm md:text-base
                                leading-relaxed [&_p]:mb-5 [&_p]:text-justify
                                [&_strong]:font-bold [&_strong]:text-zinc-900 [&_strong]:dark:text-zinc-100
                                [&_em]:italic
                                js-article-body">
                    {!! $featuredBody !!}
                </div>

                {{-- News source --}}
                @if (!empty($featuredSourceUrl))
                    <div class="mt-8 pt-6 border-t border-zinc-200 dark:border-zinc-800 js-article-source">

                        <div class="flex flex-wrap items-center gap-1 text-sm text-zinc-600 dark:text-zinc-400">

                            <span class="font-semibold [&_p]:m-0 [&_p]:inline">
                                {!! $featuredSourceLabel !!}
                            </span>

                            <a href="{{ $featuredSourceUrl }}" target="_blank" rel="noopener noreferrer"
                                class="text-[#0B4F8A] dark:text-primary-400 hover:underline break-all">
                                {{ $featuredSourceUrl }}
                            </a>

                        </div>

                    </div>
                @endif

            </div>
        </section>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const targets = document.querySelectorAll(
                '.js-news-card, .js-news-heading, .js-featured-img, ' +
                '.js-featured-card, .js-article-body, .js-article-source'
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