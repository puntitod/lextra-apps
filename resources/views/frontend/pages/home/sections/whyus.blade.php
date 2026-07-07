<section class="py-10 bg-white">
    <div class="w-full px-8">

        {{-- HEADING --}}
        <div class="flex items-center justify-center gap-4 mb-12 js-fade-up">

            <span class="flex-1 h-[1px] bg-gray-400"></span>

            <div class="text-center text-2xl lg:text-4xl font-black uppercase tracking-tight text-black whitespace-nowrap [&_p]:m-0">
                {!! $whyLexteraTitle !!}
            </div>

            <span class="flex-1 h-[1px] bg-gray-400"></span>

        </div>

        {{-- ITEMS --}}
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-x-8 gap-y-10">

            @foreach ($reasons as $reason)

                <div class="flex flex-col items-center text-center js-item-pop"
                     style="animation-delay: {{ $loop->index * 0.08 }}s;">

                    {{-- ICON (IMAGE) --}}
                    <div class="w-14 h-14 lg:w-16 lg:h-16 mb-4 js-icon">
                        <img
                            src="{{ asset('storage/whyus/WHY LEXTERA-' . $loop->iteration . '.png') }}"
                            alt="{{ $reason['title'] }}"
                            class="w-full h-full object-contain">
                    </div>

                    {{-- TITLE --}}
                    <div class="max-w-[140px]">
                        <p class="text-[14px] lg:text-[15px] leading-[1.3] font-medium text-black m-0">
                            {{ $reason['title'] }}
                        </p>
                    </div>

                </div>

            @endforeach

        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const targets = document.querySelectorAll('.js-fade-up, .js-item-pop');

    if (!targets.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('is-visible');
                void entry.target.offsetWidth; // force reflow agar animasi restart
                entry.target.classList.add('is-visible');
            } else {
                entry.target.classList.remove('is-visible');
            }
        });
    }, {
        threshold: 0.2
    });

    targets.forEach((el) => observer.observe(el));
});
</script>