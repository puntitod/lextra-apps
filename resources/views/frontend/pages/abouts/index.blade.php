@extends('frontend.layouts.app')

@section('title', $pageTitle ?? strip_tags(setting('site_name')))

@section('content')

    {{-- Breadcrumb --}}
    <!-- @include('frontend.components.breadcrumb') -->

    <div class="bg-white dark:bg-zinc-950 text-slate-800 dark:text-zinc-200 antialiased">

        {{-- ======================================================= --}}
        {{-- 1. HERO SECTION — "WHO WE ARE" --}}
        {{-- ======================================================= --}}
        <section class="relative w-full overflow-hidden">
            <img src="{{ asset('storage/about/whoweare.png') }}" alt="Land surveyor in the field"
                class="w-full h-[650px] object-cover object-center js-hero-bg">

            <div class="absolute inset-0 bg-gradient-to-r from-black/10 via-transparent to-black/10"></div>

            {{-- Floating "Who We Are" card --}}
            <div class="absolute top-8 left-4 md:top-36 md:left-14 max-w-xl js-hero-card text-justify">
                <div class="bg-[#0B4F8A]/90 backdrop-blur-sm rounded-3xl p-7 md:p-10 shadow-xl">
                    <div class="text-white text-3xl md:text-5xl font-extrabold tracking-tight mb-5 [&_p]:m-0 js-hero-title">
                        {!! $heroTitle !!}
                    </div>
                    <div class="text-white/95 text-base md:text-lg leading-relaxed mb-4 [&_p]:m-0 js-hero-text">
                        {!! $heroText1 !!}
                    </div>
                    <div class="text-white/95 text-base md:text-lg leading-relaxed [&_p]:m-0 js-hero-text">
                        {!! $heroText2 !!}
                    </div>
                </div>
            </div>
        </section>

        {{-- ======================================================= --}}
        {{-- 2. VISION & MISSION --}}
        {{-- ======================================================= --}}
        <section class="py-10 bg-white overflow-x-hidden">
            <div class="flex flex-col lg:flex-row gap-4">
                {{-- ================= VISION SECTION ================= --}}
                <div class="relative flex w-full lg:w-1/2 min-h-[420px] items-center">
                    <div class="absolute left-0 top-1/5 -translate-y-1/2 w-[60%] z-0 js-vm-img-left">
                        <img src="{{ asset('storage/about/vision.png') }}" alt="Vision"
                            class="w-full h-25 object-cover rounded-[2rem]">
                    </div>
                    <div class="relative top-1/8 z-10 ml-[54%] w-[72%]
                               bg-[#0B5F8D]
                               text-white
                               px-8 py-10
                               rounded-tl-[2rem] rounded-bl-[2rem]
                               rounded-tr-none rounded-br-none
                               shadow-lg
                               overflow-hidden
                               flex flex-col
                               justify-start
                               js-vm-card">
                        <div class="absolute inset-0 flex items-center justify-center opacity-10">
                            <svg class="w-56 h-56" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <circle cx="12" cy="12" r="8" />
                                <path d="M12 2v4M12 18v4M2 12h4M18 12h4" />
                            </svg>
                        </div>
                        <div class="relative z-10 
                                    text-base 
                                    lg:text-lg
                                    leading-relaxed
                                    text-justify
                                    [&_p]:mb-5
                                    [&_ul]:space-y-4
                                    [&_li]:text-justify">
                            {!! $visionText !!}
                        </div>
                    </div>
                </div>

                {{-- ================= MISSION SECTION ================= --}}
                <div class="relative flex w-full lg:w-1/2 min-h-[420px] items-center">
                    <div class="relative z-10 mr-[54%] w-[72%]
                               bg-[#0B5F8D]
                               text-white
                               px-8 py-10
                               rounded-tr-[2rem] rounded-br-[2rem]
                               rounded-tl-none rounded-bl-none
                               shadow-lg
                               overflow-hidden
                               flex flex-col
                               justify-start
                               js-vm-card">
                        <div class="absolute inset-0 flex items-center justify-center opacity-10">
                            <svg class="w-72 h-72" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <circle cx="12" cy="12" r="10" />
                                <circle cx="12" cy="12" r="6" />
                                <path d="M12 2v4M12 18v4M2 12h4M18 12h4" />
                            </svg>
                        </div>
                        <div class="relative z-10 
                                    text-base 
                                    lg:text-lg
                                    leading-relaxed
                                    text-justify
                                    [&_p]:mb-5
                                    [&_ul]:space-y-4
                                    [&_li]:text-justify">
                            {!! $missionText !!}
                        </div>
                    </div>
                    <div class="absolute flex right-0 top-1/5 -translate-y-1/2 w-[60%] z-0 js-vm-img-right">
                        <img src="{{ asset('storage/about/mission.png') }}" alt="Mission"
                            class="w-full h-25 object-cover rounded-[2rem]">
                    </div>
                </div>
            </div>
        </section>

        {{-- ======================================================= --}}
        {{-- 3. ABOUT COMNAV + INFRASTRUCTURE --}}
        {{-- ======================================================= --}}
        <section class="w-full px-4 md:px-10 py-12 md:py-16">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-12">
                <img src="{{ asset('storage/about/comnav.jpeg') }}" alt="ComNav Technology headquarters building"
                    class="w-full h-90 md:h-96 object-cover shadow js-about-img">

                <div class="js-about-text text-justify">
                    <div class="text-2xl md:text-3xl font-extrabold text-slate-900 dark:text-zinc-100 mb-5 [&_p]:m-0">
                        {!! $comnavTitle !!}
                    </div>
                    <ul
                        class="space-y-4 text-slate-700 dark:text-zinc-300 text-[15px] md:text-base leading-relaxed list-disc pl-5 [&_p]:m-0">
                        <li>{!! $comnavPoint1 !!}</li>
                        <li>{!! $comnavPoint2 !!}</li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-12">
                <div class="js-infra-text text-justify">
                    <div class="text-2xl md:text-3xl font-extrabold text-slate-900 dark:text-zinc-100 mb-4 [&_p]:m-0">
                        {!! $infraTitle !!}
                    </div>
                    <div class="text-slate-700 dark:text-zinc-300 leading-relaxed mb-4 [&_p]:m-0">
                        {!! $infraIntro !!}
                    </div>

                    <div class="text-slate-700 dark:text-zinc-300 mb-4 [&_ul]:space-y-1 [&_ul]:list-disc [&_ul]:pl-5">
                        {!! $infraCountries !!}
                    </div>

                    <div class="text-slate-700 dark:text-zinc-300 leading-relaxed [&_p]:m-0">
                        {!! $infraClosing !!}
                    </div>
                </div>

                <div class="rounded-md p-4 md:p-6 flex items-center justify-center js-infra-map">
                    <img src="{{ asset('storage/about/infra.jpg') }}"
                        alt="World map showing countries where ComNav solutions are deployed"
                        class="w-full h-90 md:h-96 object-cover shadow js-about-img">
                </div>
            </div>
        </section>

        {{-- ======================================================= --}}
        {{-- 4. OUR MANAGEMENT --}}
        {{-- ======================================================= --}}
        <section class="w-full px-4 md:px-10 pb-16">

            {{-- TITLE --}}
            <div class="flex items-center gap-4 mb-10">
                <span class="flex-1 h-px bg-slate-300 dark:bg-zinc-700"></span>

                <div class="text-2xl md:text-4xl font-extrabold uppercase text-slate-900 dark:text-white">
                    {!! $managementTitle !!}
                </div>

                <span class="flex-1 h-px bg-slate-300 dark:bg-zinc-700"></span>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-start">

                {{-- LEFT MANAGEMENT --}}
                <div class="flex gap-4 items-stretch">

                    {{-- PHOTO --}}
                    <div class="w-[180px] md:w-[220px] flex-shrink-0 js-mgmt2-photo-left">
                        <img
                            src="{{ asset('storage/management/rudhi.jpeg') }}"
                            alt="{{ strip_tags($rudhi['name']) }}"
                            class="w-full h-full object-cover rounded-[22px] shadow-lg">
                    </div>

                    {{-- TEXT --}}
                    <div class="flex-1 js-mgmt2-text">

                        <h3 class="text-[22px] md:text-[28px] font-extrabold leading-[1.05] text-slate-900 dark:text-white">
                            {!! $rudhi['name'] !!}
                        </h3>

                        <div class="text-[18px] md:text-[20px] leading-tight mb-4 text-slate-700 dark:text-zinc-300">
                            {!! $rudhi['position'] !!}
                        </div>

                        <div class="text-[13px] leading-[1.25] text-justify text-slate-700 dark:text-zinc-300">
                            {!! $rudhi['bio'] !!}
                        </div>

                    </div>

                </div>

                {{-- RIGHT MANAGEMENT --}}
                <div class="flex gap-4 items-stretch">

                    {{-- TEXT --}}
                    <div class="flex-1 text-right js-mgmt2-text">

                        <h3 class="text-[22px] md:text-[28px] font-extrabold leading-[1.05] text-slate-900 dark:text-white">
                            {!! $ades['name'] !!}
                        </h3>

                        <div class="text-[18px] md:text-[20px] leading-tight mb-4 text-slate-700 dark:text-zinc-300">
                            {!! $ades['position'] !!}
                        </div>

                        <div class="text-[13px] leading-[1.25] text-justify text-slate-700 dark:text-zinc-300">
                            {!! $ades['bio'] !!}
                        </div>

                    </div>

                    {{-- PHOTO --}}
                    <div class="w-[180px] md:w-[220px] flex-shrink-0 js-mgmt2-photo-right">
                        <img
                            src="{{ asset('storage/management/ades.jpeg') }}"
                            alt="{{ strip_tags($ades['name']) }}"
                            class="w-full h-full object-cover rounded-[22px] shadow-lg">
                    </div>

                </div>

            </div>

        </section>

        {{-- ======================================================= --}}
        {{-- 5. OUR CERTIFICATE --}}
        {{-- ======================================================= --}}
        <section class="w-full px-4 md:px-10 pb-16">

            {{-- TITLE --}}
            <div class="flex items-center gap-4 mb-10">
                <span class="flex-1 h-px bg-slate-300 dark:bg-zinc-700"></span>

                <div class="text-2xl md:text-4xl font-extrabold uppercase text-slate-900 dark:text-white">
                    {!! $certificateTitle !!}
                </div>

                <span class="flex-1 h-px bg-slate-300 dark:bg-zinc-700"></span>
            </div>

             @php
        $certificates = [
            [
                'image' => asset('storage/about/c1.jpeg'),
                'title' => 'Certificate of Achievement'
            ],
            [
                'image' => asset('storage/about/c2.png'),
                'title' => 'Certificate of Appreciation'
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        @foreach($certificates as $certificate)

            <div
                class="group bg-white border border-gray-200 rounded-xl overflow-hidden shadow hover:shadow-xl transition duration-300">

                <div class="overflow-hidden">

                    <img src="{{ $certificate['image'] }}"
                         alt="{{ $certificate['title'] }}"
                         class="w-full h-[320px] object-contain bg-gray-50
                                group-hover:scale-105 transition duration-500">

                </div>

            </div>

        @endforeach

    </div>

</section>
    </div>

    {{-- ================= ANIMATION OBSERVER ================= --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const targets = document.querySelectorAll(
                '.js-hero-card, .js-hero-title, .js-hero-text, ' +
                '.js-vm-img-left, .js-vm-img-right, .js-vm-card, ' +
                '.js-about-img, .js-about-text, .js-infra-map, .js-infra-text, ' +
                '.js-mgmt2-photo-left, .js-mgmt2-photo-right, .js-mgmt2-text, ' +
                '.js-contact-header, .js-contact-item, .js-contact-banner, ' +
                '.js-contact-form, .js-field'
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
                threshold: 0.15,
                rootMargin: "0px 0px -40px 0px"
            });

            targets.forEach((el) => observer.observe(el));
        });
    </script>

@endsection