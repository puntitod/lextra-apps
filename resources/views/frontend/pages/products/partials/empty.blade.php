<div class="col-span-full py-24 text-center">

    <x-heroicon-o-shopping-bag
        class="mx-auto h-14 w-14 text-neutral-400 dark:text-neutral-600" />

    <h3 class="mt-6 text-base font-semibold text-neutral-900 dark:text-neutral-100">
        {!! setting('product_empty_title', 'Belum ada Produk') !!}
    </h3>

    <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400 max-w-md mx-auto">
        {!! setting(
        'product_empty_description',
        'Produk baru akan muncul di sini setelah dipublikasikan.'
        ) !!}
    </p>
</div>
