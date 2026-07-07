<section class="pt-4 pb-8 bg-white dark:bg-zinc-950">
    <div class="relative h-[380px] md:h-[420px] overflow-hidden">
        <img src="{{ asset('storage/hero/company.png') }}" alt="PT Lextera Survey Indonesia"
            class="absolute inset-0 w-full h-full object-cover js-hero-img">

        <div
            class="absolute inset-0 bg-gradient-to-r from-sky-900/40 via-sky-900/10 to-transparent js-hero-overlay opacity-0">
        </div>

        <div class="relative z-10 h-full flex items-center">
            <div class="container w-full px-0 md:px-0">
                <div class="bg-white/40 backdrop-blur-sm rounded-tr-[60px] rounded-br-[60px] p-12 md:p-16 max-w-2xl
                            opacity-0 js-hero-box">
                    <div class="text-2xl md:text-3xl font-extrabold uppercase mb-4 [&_p]:m-0
                                opacity-0 js-hero-title">
                        {!! $introTitle !!}
                    </div>
                    <div class="leading-relaxed [&_p]:m-0
                                opacity-0 js-hero-text text-justify">
                        {!! $introText !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const targets = document.querySelectorAll(
                '.js-hero-img, .js-hero-overlay, .js-hero-box, .js-hero-title, .js-hero-text'
            );

            if (!targets.length) return;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove('is-visible');
                        void entry.target.offsetWidth; // force reflow agar animasi bisa restart
                        entry.target.classList.add('is-visible');
                    } else {
                        entry.target.classList.remove('is-visible');
                    }
                });
            }, {
                threshold: 0.3
            });

            targets.forEach((el) => observer.observe(el));
        });
    </script>
</section>