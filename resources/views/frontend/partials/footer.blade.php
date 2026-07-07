<section style="background-color: #56788d;">
    <div class="w-full">

        <div class="grid lg:grid-cols-2">

            {{-- LEFT SIDE --}}
            <div class="px-8 md:px-12 py-6 flex flex-col justify-center">

                {{-- Header --}}
                <div class="mb-4">
                    <div class="flex items-center gap-4 mb-1.5">
                        <h2 class="text-xl md:text-2xl font-extrabold uppercase text-white whitespace-nowrap">
                            Contact Us
                        </h2>

                        <div class="h-[2px] flex-1 bg-white/50"></div>
                    </div>

                    <p class="text-white/80 text-xs md:text-sm">
                        For more information, contact us for expert advice and personalized assistance
                    </p>
                </div>

                {{-- Contact Info --}}
                <div class="grid md:grid-cols-2 gap-4">

                    {{-- Left Contact --}}
                    <div class="space-y-3">

                        {{-- Phone --}}
                        <div class="flex items-center gap-3">
                            <span
                                class="w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-white text-sky-700">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M6.6 10.8a15.5 15.5 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11 11 0 0 0 3.4.55 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11 11 0 0 0 .55 3.4 1 1 0 0 1-.25 1L6.6 10.8Z" />
                                </svg>
                            </span>

                            <span class="text-white text-sm">
                                {{ strip_tags(setting('phone', '+6221 - 1234 - 567')) }}
                            </span>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-center gap-3">
                            <span
                                class="w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-white text-sky-700">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M2 5.5A1.5 1.5 0 0 1 3.5 4h17A1.5 1.5 0 0 1 22 5.5v13a1.5 1.5 0 0 1-1.5 1.5h-17A1.5 1.5 0 0 1 2 18.5v-13Zm2.2.5 7.3 5.84a1 1 0 0 0 1 0L19.8 6H4.2Z" />
                                </svg>
                            </span>

                            <span class="text-white text-sm break-all">
                                {{ strip_tags(setting('email', 'ask@lexterasurveyindonesia.com')) }}
                            </span>
                        </div>

                        {{-- Address --}}
                        <div class="flex items-start gap-3">
                            <span
                                class="w-8 h-8 flex-shrink-0 flex items-center justify-center rounded-full bg-white text-sky-700">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z" />
                                </svg>
                            </span>

                            <span class="text-white text-xs leading-relaxed">
                                {{ strip_tags(setting('address', 'Sakura Garden City Tower Cattleya CAT 01-15, Jl. Bina Marga No.88 Cipayung, Jakarta Timur, DKI Jakarta 13820, Indonesia')) }}
                            </span>
                        </div>

                    </div>

                    {{-- Right Contact --}}
                    <div class="space-y-3">

                        {{-- Linkedin --}}
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-sky-700">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14ZM8.34 18V9.75H5.67V18h2.67Zm-1.34-9.4a1.39 1.39 0 1 0 0-2.77 1.39 1.39 0 0 0 0 2.77ZM18.34 18v-4.7c0-2.52-1.35-3.7-3.15-3.7a2.72 2.72 0 0 0-2.46 1.35h-.03V9.75H10v8.25h2.67v-4.34c0-1.15.22-2.27 1.64-2.27 1.4 0 1.42 1.32 1.42 2.34V18h2.6Z" />
                                </svg>
                            </span>

                            <span class="text-white text-sm">
                                {{ setting('linkedin_label', 'PT Lextera Survey Indonesia') }}
                            </span>
                        </div>

                        {{-- Instagram --}}
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 flex items-center justify-center rounded-full bg-white text-sky-700">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M7.5 2A5.5 5.5 0 0 0 2 7.5v9A5.5 5.5 0 0 0 7.5 22h9a5.5 5.5 0 0 0 5.5-5.5v-9A5.5 5.5 0 0 0 16.5 2h-9Zm9 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z" />
                                </svg>
                            </span>

                            <span class="text-white text-sm">
                                {{ setting('instagram_label', 'PT Lextera Survey Indonesia') }}
                            </span>
                        </div>

                    </div>

                </div>
            </div>

            {{-- RIGHT SIDE --}}
            <div class="grid md:grid-cols-2">

                {{-- Banner --}}
                <div class="relative min-h-[260px] overflow-hidden">
                    <img src="{{ asset('storage/hero/footer.jpg') }}" alt="Survey Equipment"
                        class="absolute inset-0 w-full h-full object-cover">

                    <div class="absolute inset-0 bg-sky-900/60"></div>

                    <div class="relative z-10 p-5 md:p-6 flex items-center h-full">
                        <h3 class="text-white text-xl md:text-2xl font-extrabold uppercase leading-tight">
                            Ready To Enhance <br>
                            Your Mining <br>
                            Operations?
                        </h3>
                    </div>
                </div>

                {{-- Form --}}
                <div class="bg-gray-100 relative p-5">

                    {{-- Whatsapp --}}
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', setting('whatsapp', setting('phone', '0821234567'))) }}"
                        target="_blank"
                        class="absolute top-3 right-3 w-9 h-9 rounded-full bg-green-500 flex items-center justify-center hover:bg-green-600 transition">

                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2a10 10 0 0 0-8.6 15.07L2 22l5.1-1.34A10 10 0 1 0 12 2Z" />
                        </svg>
                    </a>

                    <h3 class="text-lg font-bold text-sky-900 uppercase mb-3">
                        Get A Quick Quote
                    </h3>

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-2">
                        @csrf

                        <input type="text" name="name" placeholder="Your name" required
                            class="w-full border border-gray-300 px-3 py-1.5 text-xs">

                        <div class="grid grid-cols-2 gap-2">
                            <input type="text" name="company" placeholder="Company name"
                                class="border border-gray-300 px-3 py-1.5 text-xs">

                            <input type="text" name="position" placeholder="Position"
                                class="border border-gray-300 px-3 py-1.5 text-xs">
                        </div>

                        <input type="email" name="email" placeholder="Email address" required
                            class="w-full border border-gray-300 px-3 py-1.5 text-xs">

                        <input type="text" name="phone" placeholder="Phone number"
                            class="w-full border border-gray-300 px-3 py-1.5 text-xs">

                        <input type="text" name="product_interest" placeholder="Products you are interested in"
                            class="w-full border border-gray-300 px-3 py-1.5 text-xs">

                        <textarea name="message" rows="2" placeholder="Write your message"
                            class="w-full border border-gray-300 px-3 py-1.5 text-xs"></textarea>

                        <button type="submit"
                            class="bg-sky-900 text-white px-5 py-1.5 rounded-full font-semibold text-xs hover:bg-sky-800 transition">
                            SUBMIT INQUIRY
                        </button>

                    </form>
                </div>

            </div>

        </div>

    </div>
</section>
<footer class="w-full bg-sky-900">

    <div class="mx-auto max-w-full lg:px-8">

        {{-- ================= SINGLE ROW: LOGO + MENU ================= --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 py-6">

            {{-- LOGO --}}
            <a href="{{ route('home') }}" class="flex items-center justify-center md:justify-start">
                <img src="{{ setting_url('logo_light') }}"
                    alt="{{ strip_tags($siteName ?? 'Lextera Survey Indonesia') }} Logo" class="h-18 w-18" width="120"
                    height="40">
            </a>

            {{-- MENU --}}
            <div
                class="flex flex-wrap items-center justify-center md:justify-end gap-3 text-xs font-semibold uppercase tracking-wide text-white">

                <a href="{{ route('home') }}"
                    class="hover:text-sky-200 transition {{ request()->routeIs('home') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_home', 'Home')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ route('abouts.index') }}"
                    class="hover:text-sky-200 transition {{ request()->routeIs('abouts.index') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_about', 'About Us')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ route('products.index') }}"
                    class="hover:text-sky-200 transition {{ request()->routeIs('products.*') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_product', 'Products')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ Route::has('partners.index') ? route('partners.index') : '#' }}"
                    class="hover:text-sky-200 transition {{ request()->routeIs('partners.*') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_partners', 'Partners')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ Route::has('news.index') ? route('news.index') : '#' }}"
                    class="hover:text-sky-200 transition {{ request()->routeIs('news.*') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_news', 'News')) }}
                </a>

                <span class="text-white/30">|</span>

                <a href="{{ route('contacts.index') }}"
                    class="hover:text-sky-200 transition {{ request()->routeIs('contacts.index') ? 'text-sky-200' : '' }}">
                    {{ strip_tags(setting('nav_contact', 'Contact Us')) }}
                </a>

            </div>
        </div>

        {{-- ================= COPYRIGHT ================= --}}
        <div class="border-t border-white/10 py-4 text-center text-xs text-white/60">
            © {{ date('Y') }}
            {{ strip_tags(setting('site_name', 'PT Lextera Survey Indonesia')) }}.
            {{ strip_tags(setting('footer_copyright', 'Seluruh hak cipta dilindungi.')) }}
        </div>

    </div>
</footer>