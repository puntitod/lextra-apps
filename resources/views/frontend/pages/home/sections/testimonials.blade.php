<section class="py-16 bg-sky-900">
    <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-10"></div>
    <div>
            <h2 class="text-white font-extrabold uppercase text-xl mb-6">Testimonies</h2>

            @php
                $testimonials = [
                    ['name' => 'Peter Frampton', 'position' => 'Directors of ABCD', 'rating' => 5, 'quote' => 'Great products & support!', 'photo' => asset('storage/testimonials/peter.jpg')],
                    ['name' => 'Danny Walberg', 'position' => 'Directors of ABCD', 'rating' => 5, 'quote' => 'Awesome services!', 'photo' => asset('storage/testimonials/danny.jpg')],
                    ['name' => 'Peter Frampton', 'position' => 'Directors of ABCD', 'rating' => 5, 'quote' => 'Great products & support!', 'photo' => asset('storage/testimonials/peter2.jpg')],
                    ['name' => 'Danny Walberg', 'position' => 'Directors of ABCD', 'rating' => 5, 'quote' => 'Awesome services!', 'photo' => asset('storage/testimonials/danny2.jpg')],
                ];
            @endphp

            <div class="grid grid-cols-2 gap-3 mb-6">
                @foreach ($testimonials as $t)
                    <div class="bg-sky-800 rounded-lg p-4">
                        <div class="flex items-center gap-2 mb-2">
                            <img src="{{ $t['photo'] }}" alt="{{ $t['name'] }}" class="w-9 h-9 rounded-full object-cover">
                            <div>
                                <p class="text-white text-sm font-semibold leading-tight">{{ $t['name'] }}</p>
                                <p class="text-white/60 text-[11px]">{{ $t['position'] }}</p>
                            </div>
                        </div>
                        <div class="text-yellow-400 text-xs mb-2">
                            {{ str_repeat('★', $t['rating']) }}
                        </div>
                        <p class="text-white text-sm italic">"{{ $t['quote'] }}"</p>
                    </div>
                @endforeach
            </div>

            <div class="text-center">
                <a href="{{ Route::has('testimonials.index') ? route('testimonials.index') : '#' }}"
   class="inline-block bg-white text-sky-900 font-semibold px-6 py-2 rounded-full hover:bg-sky-100 transition">
    More Testimonies
</a>
            </div>
        </div>

    </div>
    </section>