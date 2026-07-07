<section class="bg-[#005B8F] py-5 overflow-x-hidden">

    <div class="max-w-full mx-auto px-8 mb-8 js-fade-up">
        <div class="flex items-center gap-5">

            <div class="text-white font-extrabold uppercase text-3xl whitespace-nowrap [&_p]:m-0">
                {!! $managementTitle !!}
            </div>

            <div class="flex-1 h-[2px] bg-white"></div>

        </div>
    </div>

    <div class="max-w-full mx-auto px-8">

        <div class="grid lg:grid-cols-2 gap-8 items-center">

            @foreach($managements as $index => $m)

                <div class="flex items-center justify-center {{ $index % 2 == 0 ? '' : 'js-mgmt-reverse' }}"
                     style="animation-delay: {{ $loop->index * 0.1 }}s;">

                    @if($index % 2 == 0)

                        {{-- MANAGEMENT 1 --}}
                        <div class="bg-white w-58 p-6 h-58 flex flex-col justify-center js-mgmt-card">
                            <h2 class="font-bold text-[16px] uppercase [&_p]:m-0">
                                {!! $m['name'] !!}
                            </h2>

                            <h2 class="text-[16px] uppercase [&_p]:m-0">
                                {!! $m['position'] !!}
                            </h2>

                            <!-- <p class="uppercase text-[8px] text-gray-500 [&_p]:m-0">
                                {!! $m['position'] !!}
                            </p> -->

                            <div class="text-[11px] leading-4 text-justify mt-3 [&_p]:m-0 [&_p+p]:mt-2">
                                {!! $m['bio'] !!}
                            </div>
                        </div>

                        <img src="{{ $m['photo'] }}" alt="{{ strip_tags($m['name']) }}"
                            class="w-70 h-80 object-cover rounded-2xl shadow-xl -mx-4 js-mgmt-photo">

                    @else

                        {{-- MANAGEMENT 2 --}}
                        <img src="{{ $m['photo'] }}" alt="{{ strip_tags($m['name']) }}"
                            class="w-70 h-80 object-cover rounded-2xl shadow-xl js-mgmt-photo">

                        <div class="bg-white w-58 p-6 h-58 flex flex-col justify-center js-mgmt-card">
                            <h2 class="font-bold text-[16px] uppercase [&_p]:m-0">
                                {!! $m['name'] !!}
                            </h2>

                            <h2 class="text-[16px] uppercase [&_p]:m-0">
                                {!! $m['position'] !!}
                            </h2>

                            <div class="text-[11px] leading-4 text-justify mt-3 [&_p]:m-0 [&_p+p]:mt-2">
                                {!! $m['bio'] !!}
                            </div>
                        </div>

                    @endif

                </div>

            @endforeach

        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const targets = document.querySelectorAll('.js-fade-up, .js-mgmt-card, .js-mgmt-photo');

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