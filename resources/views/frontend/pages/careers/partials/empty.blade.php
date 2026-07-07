<div class="col-span-full py-24 text-center">
    <x-heroicon-o-identification
        class="mx-auto h-14 w-14 text-zinc-400 dark:text-zinc-600" />

    <h3 class="mt-6 text-base font-semibold text-zinc-900 dark:text-zinc-100">
        {{ strip_tags(setting('career_empty_title', 'Belum ada lowongan')) }}
    </h3>

    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400 max-w-md mx-auto">
        {{ strip_tags(setting('career_empty_description', 'Lowongan baru akan muncul di sini setelah dipublikasikan.')) }}
    </p>
</div>
