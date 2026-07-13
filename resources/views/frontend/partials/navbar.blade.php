@php
    $pagesActive = request()->routeIs(
        'pages.index',
        'pages.show',
        'faq.index',
        'abouts.index',
        'terms-conditions.index',
        'privacy-policy.index',
        'contacts.index',
        'partners.index',
        'news.index',
        'products.index',
        'software.index',
    );
@endphp

<nav x-data="{ mobileOpen: false, langOpen: false }" x-cloak class="sticky top-0 z-50 w-full bg-sky-900">

    <div class="mx-auto max-w-full px-6 lg:px-10">
        <div class="flex h-16 min-h-[120px] items-center justify-between gap-6">

            {{-- LOGO --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2 flex-shrink-0">
                <img src="{{ setting_url('logo_light') }}"
                    alt="{{ strip_tags($siteName ?? 'Lextera Survey Indonesia') }} Logo" class="h-18 w-18" width="120"
                    height="40" fetchpriority="high">
            </a>

            {{-- DESKTOP MENU --}}
            <div class="hidden lg:flex items-center gap-4 text-xs font-semibold tracking-wide text-white">

                <a href="{{ route('home') }}"
                    class="uppercase hover:text-sky-200 {{ request()->routeIs('home') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_home', 'Home')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ route('abouts.index') }}"
                    class="uppercase hover:text-sky-200 {{ request()->routeIs('abouts.index') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_about', 'About Us')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ route('products.index') }}"
                    class="uppercase hover:text-sky-200 {{ request()->routeIs('products.*') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_product', 'Products')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ route('software.index') }}"
                    class="uppercase hover:text-sky-200 {{ request()->routeIs('software.*') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_software', 'Software')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ route('partners.index') }}"
                    class="uppercase hover:text-sky-200 {{ request()->routeIs('partners.*') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_partners', 'Partners')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ Route::has('news.index') ? route('news.index') : '#' }}"
                    class="uppercase hover:text-sky-200 {{ request()->routeIs('news.*') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_news', 'News')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ route('contacts.index') }}"
                    class="uppercase hover:text-sky-200 {{ request()->routeIs('contacts.index') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_contact', 'Contact Us')) }}
                </a>
            </div>

            {{-- RIGHT ACTIONS --}}
            <div class="hidden lg:flex items-center gap-3 flex-shrink-0">

                {{-- SEARCH --}}
                <form action="{{ route('products.search') }}" method="GET" class="flex">
                    <input type="text" name="q" placeholder="Search"
                        class="w-40 rounded-l-md border-0 bg-white px-3 py-1.5 text-xs uppercase tracking-wide text-zinc-700 placeholder:text-zinc-400 focus:outline-none focus:ring-2 focus:ring-sky-300">
                    <button type="submit"
                        class="flex items-center justify-center rounded-r-md bg-zinc-200 px-3 hover:bg-zinc-300 transition">
                        <svg class="w-4 h-4 text-zinc-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21 16.65 16.65M19 11a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                        </svg>
                    </button>
                </form>

                {{-- LANGUAGE SWITCHER --}}
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open"
                        class="flex items-center gap-1.5 rounded-md border border-white/30 px-3 py-1.5 text-xs font-semibold text-white hover:bg-white/10 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" stroke-width="1.5" />
                            <path stroke-linecap="round" stroke-width="1.5"
                                d="M3 12h18M12 3c2.5 2.7 2.5 15.3 0 18M12 3c-2.5 2.7-2.5 15.3 0 18" />
                        </svg>
                        {{ strtoupper(app()->getLocale()) === 'ID' ? 'IND' : 'ENG' }}
                        <svg class="w-3 h-3 transition-transform" x-bind:class="{ 'rotate-180': open }" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" @click.outside="open = false" x-transition
                        class="absolute right-0 mt-2 w-32 rounded-md border border-zinc-200 bg-white shadow-lg p-1 z-50">
                        <a href="{{ route('lang.switch', 'en') }}"
                            class="block rounded px-3 py-1.5 text-xs font-semibold hover:bg-sky-50 {{ app()->getLocale() === 'en' ? 'text-sky-800' : 'text-zinc-600' }}">
                            English
                        </a>
                        <a href="{{ route('lang.switch', 'id') }}"
                            class="block rounded px-3 py-1.5 text-xs font-semibold hover:bg-sky-50 {{ app()->getLocale() === 'id' ? 'text-sky-800' : 'text-zinc-600' }}">
                            Indonesia
                        </a>
                    </div>
                </div>
            </div>

            {{-- MOBILE BUTTON --}}
            <button @click="mobileOpen = !mobileOpen"
                class="lg:hidden inline-flex h-9 w-9 items-center justify-center rounded-md border border-white/30 text-white">
                <svg x-show="!mobileOpen" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileOpen" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- MOBILE MENU --}}
        <div x-show="mobileOpen" x-transition.opacity x-cloak class="lg:hidden absolute top-full left-0 w-full z-40">
            <div class="px-4 pt-4">
                <div
                    class="rounded-2xl border border-white/10 bg-sky-900 shadow-lg divide-y divide-white/10 overflow-hidden">

                    {{-- SEARCH (MOBILE) --}}
                    <form action="{{ route('products.search') }}" method="GET" class="flex p-4">
                        <input type="text" name="q" placeholder="Search"
                            class="w-full rounded-l-md border-0 bg-white px-3 py-2 text-sm text-zinc-700 placeholder:text-zinc-400 focus:outline-none">
                        <button type="submit" class="flex items-center justify-center rounded-r-md bg-zinc-200 px-3">
                            <svg class="w-4 h-4 text-zinc-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21 16.65 16.65M19 11a8 8 0 1 1-16 0 8 8 0 0 1 16 0Z" />
                            </svg>
                        </button>
                    </form>

                    {{-- LANGUAGE (MOBILE) --}}
                    <div class="flex items-center justify-center gap-2 p-4">
                        <a href="{{ route('lang.switch', 'id') }}" class="w-full text-center rounded-md px-4 py-2 text-sm font-medium border
              {{ app()->getLocale() === 'id'
    ? 'bg-white text-sky-900 border-white'
    : 'border-white/30 text-white/70' }}">
                            Indonesia
                        </a>
                        <a href="{{ route('lang.switch', 'en') }}" class="w-full text-center rounded-md px-4 py-2 text-sm font-medium border
              {{ app()->getLocale() === 'en'
    ? 'bg-white text-sky-900 border-white'
    : 'border-white/30 text-white/70' }}">
                            English
                        </a>
                    </div>

                    <a href="{{ route('home') }}"
                        class="block px-4 py-3 text-sm font-semibold uppercase text-white {{ request()->routeIs('home') ? 'text-sky-200' : '' }}">
                        {{ strip_tags(setting('nav_home', 'Home')) }}
                    </a>

                    <a href="{{ route('abouts.index') }}"
                        class="block px-4 py-3 text-sm font-semibold uppercase text-white {{ request()->routeIs('abouts.index') ? 'text-sky-200' : '' }}">
                        {{ strip_tags(setting('nav_about', 'About Us')) }}
                    </a>

                    <a href="{{ route('products.index') }}"
                        class="block px-4 py-3 text-sm font-semibold uppercase text-white {{ request()->routeIs('products.*') ? 'text-sky-200' : '' }}">
                        {{ strip_tags(setting('nav_product', 'Products')) }}
                    </a>

                    <a href="{{ Route::has('partners.index') ? route('partners.index') : '#' }}"
                        class="block px-4 py-3 text-sm font-semibold uppercase text-white {{ request()->routeIs('partners.*') ? 'text-sky-200' : '' }}">
                        {{ strip_tags(setting('nav_partners', 'Partners')) }}
                    </a>

                    <a href="{{ Route::has('news.index') ? route('news.index') : '#' }}"
                        class="block px-4 py-3 text-sm font-semibold uppercase text-white {{ request()->routeIs('news.*') ? 'text-sky-200' : '' }}">
                        {{ strip_tags(setting('nav_news', 'News')) }}
                    </a>

                    <a href="{{ route('contacts.index') }}"
                        class="block px-4 py-3 text-sm font-semibold uppercase text-white {{ request()->routeIs('contacts.index') ? 'text-sky-200' : '' }}">
                        {{ strip_tags(setting('nav_contact', 'Contact Us')) }}
                    </a>

                </div>
            </div>
        </div>
    </div>
</nav>