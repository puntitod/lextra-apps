@extends('frontend.layouts.app')

@section('title', $pageTitle)

@section('content')

{{-- Breadcrumb --}}
@include('frontend.components.breadcrumb')

<section class="bg-white dark:bg-neutral-950 py-16 sm:py-20 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mb-12 text-center fade-slide opacity-0 translate-y-4">
            <h1
                class="text-2xl sm:text-3xl lg:text-4xl
                       font-bold tracking-tight
                       text-neutral-900 dark:text-neutral-100">
                {{ $title }}
            </h1>
        </div>

        {{-- Content --}}
        <div
            class="mt-10
                   prose prose-neutral dark:prose-invert
                   prose-sm sm:prose-base lg:prose-lg
                   max-w-none leading-relaxed
                   prose-headings:font-semibold prose-headings:tracking-tight
                   prose-a:text-primary-700 dark:prose-a:text-primary-400
                   prose-a:font-medium prose-a:no-underline hover:prose-a:underline
                   prose-blockquote:border-l-primary-500 dark:prose-blockquote:border-l-primary-400
                   prose-blockquote:bg-primary-50/50 dark:prose-blockquote:bg-primary-900/30
                   prose-blockquote:rounded-md prose-blockquote:px-4 prose-blockquote:py-2
                   prose-code:bg-zinc-100 dark:prose-code:bg-zinc-800
                   prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded
                   text-zinc-700 dark:text-zinc-300">

            {!! $termsText !!}

        </div>

    </div>
</section>

{{-- Animation --}}
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
            threshold: 0.15
        });

        elements.forEach(el => observer.observe(el));
    });
</script>

@endsection
