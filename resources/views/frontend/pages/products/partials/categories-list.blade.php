@forelse ($categories as $category)
<article class="group flex flex-col overflow-hidden rounded-2xl border
                border-zinc-200 dark:border-zinc-800
                bg-white dark:bg-zinc-900
                transition-all duration-300
                hover:-translate-y-1 hover:shadow-lg
                hover:border-primary-300 dark:hover:border-primary-700">

    <a href="{{ route('products.category', $category->slug) }}"
        class="relative block overflow-hidden rounded-t-2xl">
        <img
            src="{{ $category->thumbnail ? asset('storage/' . $category->thumbnail) : asset('assets-default/hero/hero1.jpg') }}"
            alt="{{ $category->name }}"
            class="h-48 sm:h-56 w-full object-cover
                   transition-transform duration-500 ease-out
                   group-hover:scale-110">
    </a>

    <div class="flex flex-col flex-1 p-5 sm:p-6">
        <a href="{{ route('products.category', $category->slug) }}">
            <h2 class="text-base sm:text-lg font-semibold
                       text-zinc-900 dark:text-zinc-100
                       line-clamp-2">
                {{ $category->name }}
            </h2>
        </a>

        @if($category->description)
        <p class="mt-3 text-sm
                   text-zinc-600 dark:text-zinc-400
                   line-clamp-3">
            {{ Str::limit(strip_tags($category->description), 140) }}
        </p>
        @endif

        <div class="mt-4 text-sm font-medium text-primary-700 dark:text-primary-400">
            {{ $category->products_count }} produk
        </div>
    </div>
</article>
@empty
<div class="col-span-full text-center py-20">
    <p class="text-sm text-zinc-600 dark:text-zinc-400">
        {{ strip_tags(setting('product_empty_title', 'Kategori produk belum tersedia')) }}
    </p>
</div>
@endforelse
