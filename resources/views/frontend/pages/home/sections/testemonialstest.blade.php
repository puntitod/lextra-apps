

<section class="py-16 sm:py-20 lg:py-24 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-6 sm:px-12 lg:px-20 text-center">

        {{-- ================= TESTIMONIES ================= --}}
            <div class="flex flex-col h-full">

                <div class="flex items-center mb-6">

                    <div class="flex-1 h-[2px] bg-white js-heading-line"></div>

                    <h2 class="mx-4 text-white text-3xl font-extrabold uppercase whitespace-nowrap js-heading-text">
                        TESTIMONIES
                    </h2>

                    <div class="flex-1 h-[2px] bg-white js-heading-line"></div>

                </div>

                <div class="grid grid-cols-2 gap-4 flex-1">

                    @forelse($testimonials as $index => $t)

                        <div class="bg-[#5D94BC] rounded-3xl p-5 js-testi-card"
                             style="animation-delay: {{ $index * 0.12 }}s;">

                            <div class="flex items-center gap-3">

                                @if($t->photo)

                                    <img
                                        src="{{ asset('storage/'.$t->photo) }}"
                                        class="w-16 h-16 rounded-full object-cover js-testi-avatar">

                                @else

                                    <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center font-bold js-testi-avatar">
                                        {{ strtoupper(substr($t->name,0,1)) }}
                                    </div>

                                @endif

                                <div>

                                    <h3 class="text-white text-lg font-bold italic leading-tight">
                                        {{ $t->name }}
                                    </h3>

                                    <p class="text-white/80 text-xs italic">
                                        {{ $t->position }}
                                    </p>

                                    <div class="text-yellow-400 text-sm mt-1">

                                        @for($i=1;$i<=5;$i++)

                                            @if($i <= $t->rating)
                                                <span class="js-star" style="animation-delay: {{ .35 + $i * 0.08 }}s;">★</span>
                                            @else
                                                <span class="js-star" style="animation-delay: {{ .35 + $i * 0.08 }}s;">☆</span>
                                            @endif

                                        @endfor

                                    </div>

                                </div>

                            </div>

                            <div class="border-t border-white/40 my-4"></div>

                            <p class="text-white italic text-center font-semibold leading-6 js-testi-quote">

                                "{{ $t->message }}"

                            </p>

                        </div>

                    @empty

                        <div class="col-span-2 text-center text-white">
                            Belum ada testimoni.
                        </div>

                    @endforelse

                </div>

                <div class="text-center mt-5 js-btn-modern">

                    <a href="{{ Route::has('testimonials.index') ? route('testimonials.index') : '#' }}"
                       class="inline-block bg-white hover:bg-[#3f78a2] transition
                              text-black px-7 py-2 rounded-full text-sm">

                        MORE TESTIMONIES

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const targets = document.querySelectorAll(
        '.js-heading-line, .js-heading-text, .js-news-card, .js-testi-card, .js-btn-modern'
    );

    if (!targets.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('is-visible');
                void entry.target.offsetWidth;
                entry.target.classList.add('is-visible');
            } else {
                entry.target.classList.remove('is-visible');
            }
        });
    }, {
        threshold: 0.15
    });

    targets.forEach((el) => observer.observe(el));
});
</script>