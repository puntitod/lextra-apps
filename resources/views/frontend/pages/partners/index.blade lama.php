@extends('frontend.layouts.app')

@section('title', $pageTitle ?? 'Our Partners')

@section('content')

@include('frontend.components.breadcrumb')

<div class="bg-white dark:bg-zinc-950">

    {{-- ======================================================= --}}
    {{-- 1. HEADER — ringkas, selaras dengan halaman About        --}}
    {{-- ======================================================= --}}
    <section class="px-4 sm:px-6 lg:px-8 pt-14 pb-10 sm:pt-16 sm:pb-12">
        <div class="max-w-4xl mx-auto text-center fade-slide opacity-0 translate-y-4">
            <span class="inline-flex items-center rounded-full bg-primary-100 dark:bg-primary-900/50
                         px-3 py-1 text-xs font-medium tracking-wide
                         text-primary-800 dark:text-primary-300 [&_p]:m-0">
                {!! $partnersBadge !!}
            </span>

            <div class="mt-6 text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight leading-tight
                       text-zinc-900 dark:text-zinc-100 [&_p]:m-0">
                {!! $partnersTitle !!}
            </div>

            <div class="mt-4 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed
                      text-zinc-600 dark:text-zinc-400 [&_p]:m-0">
                {!! $partnersSubtitle !!}
            </div>
        </div>
    </section>

    {{-- ======================================================= --}}
    {{-- 2. PRINCIPAL PARTNERS                                    --}}
    {{-- ======================================================= --}}
    <section class="px-4 sm:px-6 lg:px-8 pb-16 sm:pb-20">
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
    <section class="px-4 sm:px-6 lg:px-8 pb-20 sm:pb-24">
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
    </section>



</div>

{{-- ================= ANIMATION ================= --}}
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
            threshold: 0.15,
            rootMargin: "0px 0px -40px 0px"
        });

        elements.forEach(el => observer.observe(el));
    });
</script>

@endsection