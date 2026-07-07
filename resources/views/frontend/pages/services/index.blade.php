@extends('frontend.layouts.app')

@section('title', strip_tags($title) . ' - ' . strip_tags(setting('site_name')))

@section('content')

{{-- Breadcrumb --}}
@include('frontend.components.breadcrumb')

<section
    class="py-20 lg:py-24 bg-white dark:bg-zinc-950"
    x-data="serviceModal()"
    x-cloak>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ================= HEADER ================= --}}
        <div class="mx-auto max-w-2xl text-center mb-16 fade-slide opacity-0 translate-y-4">

            {{-- BADGE --}}
            <span class="inline-flex items-center rounded-full
                           bg-primary-100 dark:bg-primary-900/50
                           px-3 py-1
                           text-xs font-medium tracking-wide
                           text-primary-800 dark:text-primary-300">
                {{ strip_tags(setting('service_badge', 'Layanan Kami')) }}
            </span>

            {{-- TITLE --}}
            <h2 class="mt-4 text-xl sm:text-2xl lg:text-3xl
                       font-bold tracking-tight
                       text-zinc-900 dark:text-zinc-100">
                {{ strip_tags(setting('title_section_service', 'Layanan yang Kami Sediakan')) }}
            </h2>

            {{-- DESCRIPTION --}}
            <p class="mt-4 text-sm sm:text-base
                       leading-relaxed
                       text-zinc-600 dark:text-zinc-400">
                {{ strip_tags(setting(
                    'subtitle_section_service',
                    'Berbagai layanan profesional untuk mendukung kebutuhan bisnis dan transformasi digital Anda.'
                )) }}
            </p>
        </div>

        {{-- ================= SERVICES ================= --}}
        <div class="grid grid-cols-2 gap-4
                     sm:grid-cols-2 sm:gap-6
                     lg:grid-cols-3
                     fade-slide opacity-0 translate-y-4">

            @forelse ($services as $service)
            <article class="rounded-xl sm:rounded-2xl
                            border border-zinc-200 dark:border-zinc-800
                            bg-white dark:bg-zinc-900
                            p-4 sm:p-6
                            transition-all duration-300
                            hover:-translate-y-1
                            hover:shadow-lg
                            hover:border-primary-300 dark:hover:border-primary-700
                            flex flex-col h-full">

                {{-- ICON --}}
                @if ($service->icon)
                <div class="mb-4 flex h-10 w-10 sm:h-11 sm:w-11
                             items-center justify-center
                             rounded-lg border
                             border-zinc-200 dark:border-zinc-800
                             bg-primary-100 dark:bg-primary-900/50
                             ring-1 ring-primary-200 dark:ring-primary-800/30">
                    <img
                        src="{{ asset('storage/' . $service->icon) }}"
                        alt="{{ $service->getName() }}"
                        loading="lazy"
                        class="h-5 w-5 sm:h-6 sm:w-6 object-contain" />
                </div>
                @endif

                {{-- TITLE --}}
                <h3 class="text-base sm:text-lg
                           font-semibold
                           text-zinc-900 dark:text-zinc-100">
                    {{ $service->getName() }}
                </h3>

                {{-- DESCRIPTION --}}
                <p class="mt-2 text-sm leading-relaxed line-clamp-3 text-zinc-700 dark:text-zinc-300">
                    {{ \Illuminate\Support\Str::limit(
                        strip_tags($service->getDescription()),
                        160
                    ) }}
                </p>

                {{-- CTA --}}
                <button
                    class="mt-auto pt-4 inline-flex items-center gap-1.5
           text-sm font-medium text-primary-700"
                    @click="openModal(
        @js($service->getName()),
        @js($service->getDescription()),
        @js($service->image ? asset('storage/' . $service->image) : '')
    )">
                    {{ strip_tags(setting('service_cta_modal', 'Selengkapnya')) }} →
                </button>


            </article>

            @empty
            <div class="col-span-full text-center py-20 w-full">
                <p class="text-sm lg:text-base text-zinc-600 dark:text-zinc-400">
                    Belum ada layanan yang tersedia.
                </p>
            </div>
            @endforelse

        </div>

        {{-- ================= PAGINATION ================= --}}
        <div class="mt-14 fade-slide opacity-0 translate-y-4">
            {{ $services->links('pagination::tailwind') }}
        </div>

    </div>

    {{-- ================= MODAL ================= --}}
    <div
        x-show="show"
        x-transition.opacity
        x-cloak
        class="fixed inset-0 z-[9999]
           bg-black/60 backdrop-blur-sm
           flex items-center justify-center p-4">

        <div
            x-show="show"
            x-transition
            @click.away="closeModal"
            class="relative bg-white dark:bg-zinc-900
               rounded-2xl shadow-2xl dark:shadow-black/60
               w-full max-w-4xl
               max-h-[90vh]
               overflow-hidden">

            {{-- IMAGE (FULL BLEED KE ATAS) --}}
            <template x-if="image">
                <img
                    :src="image"
                    class="w-full h-64 sm:h-80 object-cover
                       rounded-t-2xl">
            </template>

            {{-- CLOSE BUTTON --}}
            <button
                @click="closeModal"
                class="absolute top-4 right-4 z-20
                   h-9 w-9 flex items-center justify-center
                   rounded-full
                   bg-white/80 dark:bg-zinc-800/80
                   backdrop-blur
                   text-zinc-600 dark:text-zinc-400
                   hover:bg-zinc-200 dark:hover:bg-zinc-700
                   transition">
                ✕
            </button>

            {{-- CONTENT WRAPPER (PADDING DI SINI) --}}
            <div class="p-5 sm:p-6 lg:p-8
                    overflow-y-auto
                    max-h-[calc(90vh-20rem)]">

                {{-- TITLE --}}
                <h2
                    class="mb-4 text-lg lg:text-xl
                       font-bold tracking-tight
                       text-zinc-900 dark:text-zinc-100"
                    x-text="title"></h2>

                {{-- CONTENT --}}
                <div
                    class="mt-4
           prose prose-neutral dark:prose-invert
           prose-sm sm:prose-base
           max-w-none leading-relaxed

           prose-headings:font-semibold
           prose-headings:tracking-tight

           prose-a:text-primary-700 dark:prose-a:text-primary-400
           prose-a:font-medium
           prose-a:no-underline hover:prose-a:underline

           prose-blockquote:border-l-primary-500
           dark:prose-blockquote:border-l-primary-400
           prose-blockquote:bg-primary-50/50
           dark:prose-blockquote:bg-primary-900/30
           prose-blockquote:rounded-md
           prose-blockquote:px-4 prose-blockquote:py-2

           prose-code:bg-zinc-100 dark:prose-code:bg-zinc-800
           prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded

           /* 🔥 LIST FIX */
           [&_ol]:list-decimal
           [&_ol]:pl-6
           [&_ul]:list-disc
           [&_ul]:pl-6
           [&_li]:my-1
           [&_li::marker]:text-zinc-500

           text-zinc-700 dark:text-zinc-300"
                    x-html="description">
            </div>


        </div>
    </div>
    </div>


</section>

@endsection

{{-- Fade Animation --}}
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
            threshold: 0.1
        });

        elements.forEach(el => observer.observe(el));
    });
</script>

{{-- Modal Alpine Component --}}
<script>
    function serviceModal() {
        return {
            show: false,
            title: '',
            description: '',
            image: '',

            openModal(title, description, image) {
                this.title = title;
                this.description = description;
                this.image = image || '';
                this.show = true;
                document.body.classList.add("overflow-hidden");
            },

            closeModal() {
                this.show = false;
                document.body.classList.remove("overflow-hidden");
            }
        }
    }
</script>
