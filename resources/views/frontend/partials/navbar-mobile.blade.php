@php
$menus = [
[
'key' => 'home',
'name' => strip_tags(setting('nav_home', 'Beranda')),
'icon' => 'heroicon-o-squares-plus',
'route' => 'home',
'active' => request()->routeIs('home'),
],
[
'key' => 'about',
'name' => strip_tags(setting('nav_about', 'Tentang')),
'icon' => 'heroicon-o-light-bulb',
'route' => 'abouts.index',
'active' => request()->routeIs('abouts.index'),
],
[
'key' => 'services',
'name' => strip_tags(setting('nav_services', 'Layanan')),
'icon' => 'heroicon-o-briefcase',
'route' => 'services.index',
'active' => request()->routeIs('services.*'),
],
[
'key' => 'products',
'name' => strip_tags(setting('nav_product', 'Produk')),
'icon' => 'heroicon-o-shopping-bag',
'route' => 'products.index',
'active' => request()->routeIs('products.*'),
],
[
'key' => 'careers',
'name' => strip_tags(setting('nav_career', 'Karir')),
'icon' => 'heroicon-o-identification',
'route' => 'careers.index',
'active' => request()->routeIs('careers.*'),
],
[
'key' => 'contact',
'name' => strip_tags(setting('nav_contact', 'Kontak')),
'icon' => 'heroicon-o-phone-arrow-down-left',
'route' => 'contacts.index',
'active' => request()->routeIs('contacts.index'),
],
];
@endphp

<nav
    class="fixed bottom-4 left-1/2 -translate-x-1/2 z-50 md:hidden
           w-[92%] max-w-md
           bg-white/90 dark:bg-zinc-900/90 backdrop-blur-xl
           border border-zinc-200/50 dark:border-zinc-800/50
           shadow-2xl dark:shadow-black/40
           rounded-3xl py-3 px-4 flex justify-around items-center">

    @foreach ($menus as $item)
    <a href="{{ route($item['route']) }}"
        class="relative flex flex-col items-center gap-1.5 py-2 px-3 rounded-2xl transition-all duration-300
              {{ $item['active']
                  ? 'text-primary-700 dark:text-primary-400 bg-primary-100/50 dark:bg-primary-900/50'
                  : 'text-zinc-600 dark:text-zinc-400 hover:text-primary-700 dark:hover:text-primary-400 hover:bg-primary-100/30 dark:hover:bg-primary-900/30' }}">

        {{-- ICON --}}
        <x-dynamic-component
            :component="$item['icon']"
            class="h-6 w-6 transition-all duration-300
                   {{ $item['active'] ? '' : 'group-hover:scale-110' }}" />

        {{-- LABEL --}}
        <span class="text-[11px] font-medium transition-all duration-300">
            {{ $item['name'] }}
        </span>

        {{-- ACTIVE INDICATOR (optional subtle dot) --}}
        @if($item['active'])
        <span class="absolute -top-1 w-2 h-2 rounded-full bg-primary-900 dark:bg-primary-200"></span>
        @endif
    </a>
    @endforeach

</nav>
