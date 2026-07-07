@for ($i = 0; $i < 6; $i++)
    <div
    class="
            overflow-hidden
            rounded-2xl
            border border-neutral-200 dark:border-neutral-800
            bg-white dark:bg-neutral-900
            animate-pulse
        ">

    {{-- IMAGE --}}
    <div class="h-52 bg-neutral-200 dark:bg-neutral-800"></div>

    {{-- CONTENT --}}
    <div class="p-5 sm:p-6 space-y-3">
        <div class="h-4 w-3/4 rounded bg-neutral-200 dark:bg-neutral-800"></div>
        <div class="h-3 w-full rounded bg-neutral-200 dark:bg-neutral-800"></div>
        <div class="h-3 w-5/6 rounded bg-neutral-200 dark:bg-neutral-800"></div>
    </div>

    </div>
    @endfor
