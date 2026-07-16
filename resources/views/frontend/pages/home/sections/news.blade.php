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
                            'image'=>asset('storage/news/3.jpeg'),
                            'link'=>route('news.index')
                        ],
                        [
                            'title'=>'BRIN\'s Integrated Geological Platform.',
                            'image'=>asset('storage/news/4.jpg'),
                            'link'=>route('news.index')
                        ],
                        [
                            'title'=>'Lextera Survey Indonesia Officially a ComNav Tech Distributor.',
                            'image'=>asset('storage/news/5.jpeg'),
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

            {{-- ================= OUR PARTNERSHIP ================= --}}
            <div class="flex flex-col h-full">

                <div class="flex items-center mb-6">

                    <div class="flex-1 h-[2px] bg-white js-heading-line"></div>

                    <h2 class="mx-4 text-white text-3xl font-extrabold uppercase whitespace-nowrap js-heading-text">
                        OUR PARTNERSHIP
                    </h2>

                    <div class="flex-1 h-[2px] bg-white js-heading-line"></div>

                </div>

                @php
                    $partners = [
                        [
                            'title'=>'PT Insani Bara Perkasa Samarinda',
                            'image'=>asset('storage/news/insani.png'),
                            'link'=>route('partners.index'),
                        ],
                        [
                            'title'=>'BRIN (Badan Riset dan Inovasi Nasional)',
                            'image'=>asset('storage/news/brin.jpg'),
                            'link'=>route('partners.index'),
                        ],
                        [
                            'title'=>'BIG (Badan Informasi Geospasial)',
                            'image'=>asset('storage/news/big.jpg'),
                            'link'=>route('partners.index')
                        ],
                        [
                            'title'=>'ComNav',
                            'image'=>asset('storage/news/comnav.jpg'),
                            'link'=>route('partners.index')
                        ],
                        [
                            'title'=>'Mr Wang',
                            'image'=>asset('storage/news/mr wang.jpeg'),
                            'link'=>route('partners.index')
                        ],
                        [
                            'title'=>'PERTAABI (Perkumpulan Tenaga Ahli Alat Berat Indonesia)',
                            'image'=>asset('storage/news/pertaabi.jpeg'),
                            'link'=>route('partners.index')
                        ],
                    ];
                @endphp

                <div class="grid grid-cols-3 gap-6 flex-1">

                    @foreach($partners as $index => $item)

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

                    <a href="{{ Route::has('partners.index') ? route('partners.index') : '#' }}"
                       class="inline-block bg-white hover:bg-[#3f78a2] transition
                              text-black px-7 py-2 rounded-full text-sm">

                        MORE DETAILS

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const targets = document.querySelectorAll(
        '.js-heading-line, .js-heading-text, .js-news-card, .js-btn-modern'
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