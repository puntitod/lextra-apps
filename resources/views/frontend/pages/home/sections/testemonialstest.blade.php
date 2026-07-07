

<section class="py-16 sm:py-20 lg:py-24 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-6 sm:px-12 lg:px-20 text-center">

        {{-- ================= HEADER ================= --}}
        <div class="mx-auto max-w-2xl">

            {{-- BADGE --}}
            <div class="flex justify-center">
                <span class="inline-flex items-center rounded-full
                               bg-primary-100 dark:bg-primary-900/50
                               px-3 py-1.5
                               text-xs font-medium tracking-wide
                               text-primary-800 dark:text-primary-300">
                    {{ strip_tags(setting('testimonials_badge', 'Testimoni Klien')) }}
                </span>
            </div>

            {{-- TITLE --}}
            <h2 class="mt-4
                       text-xl sm:text-2xl lg:text-3xl
                       font-semibold tracking-tight leading-tight
                       text-zinc-900 dark:text-zinc-100">
                {{ strip_tags(setting('testimonials_title', 'Apa Kata Mereka')) }}
            </h2>

            {{-- SUBTITLE --}}
            <p class="mt-4
                       text-sm sm:text-base
                       leading-relaxed
                       text-zinc-600 dark:text-zinc-400">
                {{ strip_tags(
                    setting(
                        'testimonials_subtitle',
                        'Cerita nyata dari klien yang telah menggunakan layanan kami.'
                    )
                ) }}
            </p>
        </div>

        {{-- ================= SLIDER ================= --}}
        <div
            x-data="{
                index: 0,
                items: {{ $testimonials->values() }},
                timer: null,
                interval: 6000,

                touchStartX: 0,
                touchEndX: 0,

                start() {
                    if (this.timer || this.items.length <= 1) return
                    this.timer = setInterval(() => this.next(), this.interval)
                },

                stop() {
                    clearInterval(this.timer)
                    this.timer = null
                },

                next() {
                    this.index = (this.index + 1) % this.items.length
                },

                prev() {
                    this.index = (this.index - 1 + this.items.length) % this.items.length
                },

                handleTouchStart(e) {
                    this.touchStartX = e.touches[0].clientX
                    this.stop()
                },

                handleTouchEnd(e) {
                    this.touchEndX = e.changedTouches[0].clientX
                    const diff = this.touchStartX - this.touchEndX
                    if (Math.abs(diff) > 50) {
                        diff > 0 ? this.next() : this.prev()
                    }
                    this.start()
                },

                visibilityHandler() {
                    document.hidden ? this.stop() : this.start()
                },

                init() {
                    this.start()
                    document.addEventListener(
                        'visibilitychange',
                        this.visibilityHandler.bind(this)
                    )
                },

                get current() {
                    return this.items[this.index]
                }
            }"
            x-init="init()"
            @mouseenter="stop()"
            @mouseleave="start()"
            @touchstart.passive="handleTouchStart($event)"
            @touchend.passive="handleTouchEnd($event)"
            class="relative mt-12">

            {{-- CARD --}}
            <div
                :key="index"
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="mx-auto w-full max-w-xl
                       rounded-2xl border
                       border-zinc-200 dark:border-zinc-800
                       bg-white dark:bg-zinc-900
                       px-6 py-8 sm:px-8 sm:py-10
                       shadow-lg dark:shadow-black/40">

                {{-- AVATAR --}}
                <div class="flex justify-center mb-6">
                    <img
                        :src="current.avatar ?? 'https://ui.shadcn.com/avatars/01.png'"
                        alt=""
                        class="h-12 w-12 sm:h-14 sm:w-14 rounded-full object-cover
                               border-4 border-primary-100 dark:border-primary-900/50">
                </div>

                {{-- MESSAGE --}}
                <p class="mx-auto max-w-xl
                           text-sm sm:text-base
                           leading-relaxed
                           text-zinc-700 dark:text-zinc-300">
                    <span x-text="current.message"></span>
                </p>

                {{-- NAME --}}
                <div class="mt-8">
                    <h3 class="text-base sm:text-lg font-medium tracking-tight
                               text-zinc-900 dark:text-zinc-100"
                        x-text="current.name">
                    </h3>

                    {{-- STARS --}}
                    <div class="mt-3 flex items-center justify-center gap-1">
                        <template x-for="i in 5">
                            <span class="text-base sm:text-lg"
                                :class="i <= current.rating
                                      ? 'text-yellow-500'
                                      : 'text-zinc-300 dark:text-zinc-600'">
                                ★
                            </span>
                        </template>
                    </div>
                </div>
            </div>

            {{-- DOTS --}}
            <div class="mt-10 flex items-center justify-center gap-3">
                <template x-for="(item, i) in items" :key="i">
                    <button
                        @click="index = i"
                        class="h-2.5 w-2.5 rounded-full transition
                               focus-visible:outline-none
                               focus-visible:ring-2 focus-visible:ring-primary-400/50"
                        :class="index === i
                            ? 'bg-primary-900 dark:bg-primary-100'
                            : 'bg-zinc-300 dark:bg-zinc-700'">
                    </button>
                </template>
            </div>

            {{-- NAV (DESKTOP) --}}
            <div class="hidden sm:flex mt-12 items-center justify-center gap-6">
                <button
                    @click="prev"
                    class="inline-flex h-12 w-12 items-center justify-center rounded-full
                           border border-zinc-200 dark:border-zinc-800
                           text-zinc-600 dark:text-zinc-300
                           hover:bg-zinc-100 dark:hover:bg-zinc-800
                           hover:border-primary-300 dark:hover:border-primary-700
                           transition">
                    ←
                </button>

                <button
                    @click="next"
                    class="inline-flex h-12 w-12 items-center justify-center rounded-full
                           bg-primary-900 dark:bg-primary-100
                           text-white dark:text-primary-900
                           hover:bg-primary-800 dark:hover:bg-primary-200
                           shadow-sm
                           transition">
                    →
                </button>
            </div>

        </div>
    </div>
</section>
