<!DOCTYPE html>
<html lang="id" class="h-full antialiased"> 
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preload" as="image" href="{{ setting_url('logo_light') }}">
    <link rel="preload" as="image" href="{{ setting_url('logo_dark') }}">

    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="@yield('title', setting('site_name'))">
    <meta property="og:description" content="@yield('description', setting('tagline'))">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ setting_url('og_image', setting_url('logo')) }}">

    {{-- ================= GLOBAL FADE-SLIDE ANIMATION ================= --}}
{{-- Taruh script ini sekali saja di layout utama (sebelum </body>)
     supaya semua halaman yang punya class "fade-slide" otomatis animasi
     tanpa perlu copy-paste script di setiap blade. --}}
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

        (function() {
            const theme = localStorage.getItem('theme');
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        })();
        
    </script>

    {{-- Title & Meta --}}
    <title>@yield('title', $title ?? setting('site_name', 'Mulaidigital Starter Kit'))</title>
    <meta name="description" content="@yield('description', setting('tagline', 'Mulai Digital'))" />

    {{-- Icons --}}
    <link rel="icon" href="{{ setting_url('favicon', 'favicon.svg') }}" />
    <link rel="apple-touch-icon" href="{{ setting_url('logo', 'logo.png') }}" />

    {{-- PWA --}}
    <link rel="manifest" href="{{ url('/manifest.json') }}">
    <meta name="theme-color" content="{{ setting('primary_color', '#ffffff') }}">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    

    @stack('head')
</head>

<body class="min-h-screen bg-white text-gray-900 dark:bg-neutral-950 dark:text-neutral-100
              antialiased
              supports-[backdrop-filter]:selection:bg-primary-600/30
              dark:supports-[backdrop-filter]:selection:bg-primary-400/30
              pb-safe">

    @include('frontend.partials.navbar')
    @include('frontend.partials.navbar-mobile')

    <main class="relative">
        @yield('content')
    </main>

    @if (session('success'))
    @include('frontend.partials.toast')
    @endif

    <div id="toast-container"
        class="fixed bottom-4 left-1/2 -translate-x-1/2 z-50 flex flex-col gap-3 items-center">
    </div>

    @include('frontend.partials.footer')

    @stack('scripts')

    <div x-data x-init="$nextTick(() => $el.innerHTML = @js(view('frontend.partials.whatsapp-float')->render()))"></div>
</body>

</html>
