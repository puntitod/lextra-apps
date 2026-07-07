<section style="background:#005B8F;" class="py-8">

    <div class="max-w-full-2xl mx-auto px-6">

        <div class="grid lg:grid-cols-[1fr_1px_1fr] gap-6 items-stretch">
            {{-- ================= NEWS ================= --}}
            <div class="flex flex-col h-full">

                {{-- Heading --}}
                <div class="flex items-center mb-6">

                    <div class="flex-1 h-[2px] bg-white js-heading-line"></div>

                    <h2 class="mx-4 text-white text-3xl font-extrabold uppercase whitespace-nowrap js-heading-text">
                        NEWS & HIGHLIGHTS
                    </h2>

                    <div class="flex-1 h-[2px] bg-white js-heading-line"></div>

                </div>

                @php
                    $news = [
                        [
                            'title'=>'Big news! Lextera Survey Indonesia is officially opening a new branch in Malang!',
                            'image'=>asset('storage/news/1.jpg'),
                            'link'=>route('news.index'),
                        ],
                        [
                            'title'=>'Operational Performance Test PT Insani Bara Perkasa Samarinda',
                            'image'=>asset('storage/news/2.png'),
                            'link'=>route('news.index'),
                        ],
                        [
                            'title'=>'We empower the future of geospatial solutions with technology you can trust.',
                            'image'=>asset('storage/news/3.jpg'),
                            'link'=>route('news.index')
                        ],
                        [
                            'title'=>'Meet the SV600, the future of hydrographic survey is unmanned.',
                            'image'=>asset('storage/news/4.jpg'),
                            'link'=>route('news.index')
                        ],
                        [
                            'title'=>'The SinoGNSS Mars Pro Laser RTK hits the sweet spot serious surveyors need.',
                            'image'=>asset('storage/news/5.jpg'),
                            'link'=>route('news.index')
                        ],
                        [
                            'title'=>'The SinoGNSS N2 Palm proves that the best tools do not have to be heavy.',
                            'image'=>asset('storage/news/6.jpg'),
                            'link'=>route('news.index')
                        ],
                    ];
                @endphp

                <div class="grid grid-cols-3 gap-6 flex-1">

                    @foreach($news as $index => $item)

                        <a href="{{ $item['link'] }}"
                           class="relative overflow-hidden border border-white h-52 group js-news-card"
                           style="animation-delay: {{ $index * 0.1 }}s;">

                            <img
                                src="{{ $item['image'] }}"
                                class="w-full h-full object-cover transition duration-300 group-hover:scale-105">

                            <div class="absolute inset-x-0 bottom-0 bg-black/60 px-2 py-2">

                                <p class="text-white text-[11px] leading-3 text-center line-clamp-3">
                                    {{ $item['title'] }}
                                </p>

                            </div>

                        </a>

                    @endforeach

                </div>

                <div class="text-center mt-5 js-btn-modern">

                    <a href="{{ Route::has('news.index') ? route('news.index') : '#' }}"
                       class="inline-block bg-white hover:bg-[#3f78a2] transition
                              text-black px-7 py-2 rounded-full text-sm">

                        MORE NEWS

                    </a>

                </div>

            </div>

            {{-- Divider --}}
            <div class="bg-white/70 w-px self-stretch"></div>

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