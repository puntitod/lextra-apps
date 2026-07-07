@extends('frontend.layouts.app')

@section(
'title',
strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'mulaidigital.com'))
)

@section('content')

@include('frontend.components.breadcrumb', [
'items' => [
[
'label' => strip_tags(setting('nav_career', 'Karir')),
'url' => route('careers.index'),
],
[
'label' => $career->localized_title,
'url' => null,
],
],
])

<section class="py-16 sm:py-20 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,420px)_1fr] gap-10 lg:gap-14">
            <div>
                <div class="overflow-hidden rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-100 dark:bg-zinc-900 shadow-sm">
                    @if($career->thumbnail)
                    <img
                        src="{{ asset('storage/' . $career->thumbnail) }}"
                        alt="{{ $career->localized_title }}"
                        class="aspect-[3/4] w-full object-cover">
                    @else
                    <div class="aspect-[3/4] flex items-center justify-center px-8 text-center text-zinc-500 dark:text-zinc-400">
                        {{ $career->localized_title }}
                    </div>
                    @endif
                </div>
            </div>

            <div>
                <span class="inline-flex items-center rounded-full
                               bg-primary-100 dark:bg-primary-900/50
                               px-3 py-1
                               text-xs font-medium tracking-wide
                               text-primary-800 dark:text-primary-300">
                    {{ strip_tags(setting('career_badge', 'Karir')) }}
                </span>

                <h1 class="mt-4 text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-zinc-900 dark:text-zinc-100">
                    {{ $career->localized_title }}
                </h1>

                <div class="mt-4 text-sm text-zinc-600 dark:text-zinc-400">
                    @if($career->open_date || $career->close_date)
                    {{ $career->open_date?->format('d M Y') ?? 'Sekarang' }}
                    -
                    {{ $career->close_date?->format('d M Y') ?? 'Dibuka' }}
                    @else
                    {{ strip_tags(setting('career_open_label', 'Dibuka')) }}
                    @endif
                </div>

                @if($career->localized_description)
                <article class="mt-8 prose prose-neutral dark:prose-invert max-w-none
                                prose-sm sm:prose-base
                                [&_ol]:list-decimal [&_ol]:pl-6
                                [&_ul]:list-disc [&_ul]:pl-6
                                text-zinc-700 dark:text-zinc-300">
                    {!! $career->localized_description !!}
                </article>
                @endif

                <div class="mt-8 flex flex-wrap gap-3">
                    @if($career->application_url)
                    <a href="{{ $career->application_url }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 rounded-xl
                               bg-primary-900 dark:bg-primary-100
                               px-6 py-3 text-sm font-semibold
                               text-white dark:text-primary-900
                               hover:bg-primary-800 dark:hover:bg-primary-200
                               transition">
                        <x-heroicon-o-arrow-top-right-on-square class="w-5 h-5" />
                        {{ strip_tags(setting('career_apply_label', 'Lamar Sekarang')) }}
                    </a>
                    @endif

                    <a href="{{ route('careers.index') }}"
                        class="inline-flex items-center gap-2 rounded-xl border
                               border-zinc-300 dark:border-zinc-700
                               px-6 py-3 text-sm font-semibold
                               text-zinc-800 dark:text-zinc-100
                               hover:bg-zinc-50 dark:hover:bg-zinc-900
                               transition">
                        {{ strip_tags(setting('career_back_label', 'Kembali ke Karir')) }}
                    </a>
                </div>
            </div>
        </div>

        @if($relatedCareers->count())
        <section class="mt-20 pt-20 border-t border-zinc-200 dark:border-zinc-800">
            <div class="mb-10 flex items-center justify-between">
                <h2 class="text-xl sm:text-2xl font-bold text-zinc-900 dark:text-zinc-100">
                    {{ strip_tags(setting('career_related_title', 'Lowongan Lainnya')) }}
                </h2>

                <a href="{{ route('careers.index') }}"
                    class="text-sm font-medium text-primary-700 dark:text-primary-400
                           hover:text-primary-900 dark:hover:text-primary-300 transition-colors">
                    Lihat Semua
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @include('frontend.pages.careers.partials.careers-list', [
                    'careers' => $relatedCareers,
                ])
            </div>
        </section>
        @endif

    </div>
</section>

@endsection
