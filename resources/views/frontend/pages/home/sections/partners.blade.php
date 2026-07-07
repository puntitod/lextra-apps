<section class="py-20 sm:py-24 bg-gray-200 py-6">
    <div class="max-w-7xl mx-auto px-8">

        <div class="flex flex-wrap items-center justify-between gap-8">

            {{-- Principal Partner --}}
            <div class="flex items-center gap-6 flex-shrink-0 js-fade-up">

                <h2 class="text-2xl font-extrabold uppercase leading-tight text-black">
                    OUR PRINCIPAL <br> PARTNERS
                </h2>

                <div class="flex flex-col items-center">
                    <img src="{{ asset('storage/partners/cs.png') }}" alt="ComNavTech"
                        class="h-14 object-contain js-logo-pop" style="--delay: 0.2s;">
                    <!-- <img src="{{ asset('storage/partners/comnavbawah.png') }}" alt="bawah"
                        class="h-14 object-contain js-logo-pop" style="--delay: 0.3s;"> -->
                </div>

                {{-- Divider --}}
                <div class="mx-8 h-20 w-px bg-gray-700"></div>

                {{-- Our Clients --}}
                <div class="flex items-center gap-8 flex-shrink-0">

                    <h2 class="text-2xl font-extrabold uppercase text-black js-fade-up">
                        OUR CLIENTS
                    </h2>

                    @php
                        $clients = [
                            asset('storage/partners/bpn.png'),
                            asset('storage/partners/isi.png'),
                            asset('storage/partners/pertaabi.png'),
                            asset('storage/partners/rain.jpg'),
                            asset('storage/partners/telkom.png'),
                        ];
                    @endphp

                    @foreach ($clients as $client)
                        <img src="{{ $client }}" alt="Client" class="h-14 object-contain js-logo-pop"
                            style="--delay: 0.3s;">
                    @endforeach

                </div>

            </div>

        </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const targets = document.querySelectorAll('.js-fade-up, .js-logo-pop');

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
            threshold: 0.2
        });

        targets.forEach((el) => observer.observe(el));
    });
</script>