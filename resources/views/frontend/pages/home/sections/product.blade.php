<section class="pt-4 pb-8 bg-white dark:bg-zinc-950">

    <div class="max-w-full mx-auto px-6">

        {{-- Title --}}
        <div class="flex items-center justify-center mb-8">

            <div class="flex-1 border-t border-gray-400"></div>

            <h2 class="px-6 text-3xl font-extrabold uppercase tracking-wide text-black">
                OUR PRODUCTS
            </h2>

            <div class="flex-1 border-t border-gray-400"></div>

        </div>

        {{-- Product Grid --}}
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5">

            @foreach($products->take(6) as $product)

                @if($product->pdf_file)
                    {{-- Kalau ada PDF → buka PDF langsung --}}
                    <a href="{{ asset('storage/' . $product->pdf_file) }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="bg-white rounded-3xl overflow-hidden border border-gray-300 hover:shadow-xl transition duration-300 group">

                        {{-- Image --}}
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('storage/' . $product->thumbnail) }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>

                        {{-- Content --}}
                        <div class="px-4 py-5 text-center">
                            <h3 class="font-bold text-xl text-black leading-tight">
                                {{ $product->name }}
                            </h3>

                            <p class="mt-2 text-gray-700 text-sm leading-snug line-clamp-3">
                                {{ Str::limit(strip_tags($product->description), 70) }}
                            </p>
                        </div>

                    </a>
                @else
                    {{-- Kalau tidak ada PDF → arahkan ke halaman detail produk --}}
                    <a href="{{ route('products.show', [
                        'categorySlug' => $product->category?->slug ?? 'uncategorized',
                        'productSlug'  => $product->slug
                    ]) }}"
                        class="bg-white rounded-3xl overflow-hidden border border-gray-300 hover:shadow-xl transition duration-300 group">

                        {{-- Image --}}
                        <div class="h-48 overflow-hidden">
                            <img src="{{ asset('storage/' . $product->thumbnail) }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>

                        {{-- Content --}}
                        <div class="px-4 py-5 text-center">
                            <h3 class="font-bold text-xl text-black leading-tight">
                                {{ $product->name }}
                            </h3>

                            <p class="mt-2 text-gray-700 text-sm leading-snug line-clamp-3">
                                {{ Str::limit(strip_tags($product->description), 70) }}
                            </p>
                        </div>

                    </a>
                @endif

            @endforeach

        </div>

        {{-- Button --}}
        <div class="text-center mt-12">

            <a href="{{ route('products.index') }}" class="inline-block
                       bg-[#005B8F]
                       hover:bg-[#004b74]
                       text-white
                       rounded-full
                       px-8
                       py-2
                       uppercase
                       text-sm">
                MORE PRODUCTS
            </a>

        </div>

    </div>

</section>