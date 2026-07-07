@extends('frontend.layouts.app')

@section('title', $pageTitle)

@section('content')

{{-- Breadcrumb --}}
<!-- @include('frontend.components.breadcrumb') -->

<section class="py-14 sm:py-20 lg:py-24 bg-white dark:bg-zinc-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

            {{-- LEFT --}}
            <div class="flex flex-col justify-center">

                {{-- BADGE --}}
                <span class="mb-5 sm:mb-6 inline-flex w-fit rounded-full
                               bg-primary-100 dark:bg-primary-900/50
                               px-3 py-1
                               text-xs font-medium tracking-wide
                               text-primary-800 dark:text-primary-300">
                    {{ strip_tags(setting('contact_badge', 'Hubungi Kami')) }}
                </span>

                {{-- TITLE --}}
                <h2 class="text-2xl sm:text-3xl lg:text-4xl
                           font-bold tracking-tight
                           leading-snug sm:leading-tight
                           text-zinc-900 dark:text-zinc-100">
                    {{ strip_tags(setting('contact_title', 'Mari Terhubung')) }}
                </h2>

                {{-- DESC --}}
                <p class="mt-3 sm:mt-4 max-w-md
                           text-sm sm:text-base
                           leading-relaxed sm:leading-loose
                           text-zinc-600 dark:text-zinc-400">
                    {{ strip_tags(
                        setting(
                            'contact_description',
                            'Pertanyaan, masukan, atau peluang kolaborasi? Kirim pesan dan tim kami akan menghubungi Anda.'
                        )
                    ) }}
                </p>

                {{-- INFO --}}
                <div class="mt-10 lg:mt-12">
                    <h3 class="mb-4 text-base sm:text-lg
                               font-semibold tracking-tight
                               text-zinc-900 dark:text-zinc-100">
                        {{ strip_tags(setting('contact_info_title', 'Informasi Kontak')) }}
                    </h3>

                    <ul class="space-y-3 sm:space-y-4
                               text-sm sm:text-base
                               leading-relaxed
                               text-zinc-700 dark:text-zinc-300">
                        <div class="flex items-center gap-3 group">
                            <span class="w-11 h-11 flex-shrink-0 flex items-center justify-center rounded-full
                                         bg-primary-50 dark:bg-primary-900/40
                                         text-primary-700 dark:text-primary-300
                                         ring-1 ring-primary-100 dark:ring-primary-800
                                         group-hover:bg-primary-700 group-hover:text-white
                                         transition-colors duration-300">
                                <svg class="w-4.5 h-4.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.6 10.8a15.5 15.5 0 0 0 6.6 6.6l2.2-2.2a1 1 0 0 1 1-.25 11 11 0 0 0 3.4.55 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11 11 0 0 0 .55 3.4 1 1 0 0 1-.25 1L6.6 10.8Z" />
                                </svg>
                            </span>
                            <div class="text-sm sm:text-base text-zinc-700 dark:text-zinc-300">
                                <span class="block text-xs text-zinc-400 dark:text-zinc-500">
                                    {{ strip_tags(setting('contact_label_whatsapp', 'WhatsApp')) }}
                                </span>
                                {!! setting('whatsapp_number') !!}
                            </div>
                        </div>
                        <div class="flex items-center gap-3 group">
                            <span class="w-11 h-11 flex-shrink-0 flex items-center justify-center rounded-full
                                         bg-primary-50 dark:bg-primary-900/40
                                         text-primary-700 dark:text-primary-300
                                         ring-1 ring-primary-100 dark:ring-primary-800
                                         group-hover:bg-primary-700 group-hover:text-white
                                         transition-colors duration-300">
                                <svg class="w-4.5 h-4.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M2 5.5A1.5 1.5 0 0 1 3.5 4h17A1.5 1.5 0 0 1 22 5.5v13a1.5 1.5 0 0 1-1.5 1.5h-17A1.5 1.5 0 0 1 2 18.5v-13Zm2.2.5 7.3 5.84a1 1 0 0 0 1 0L19.8 6H4.2Z" />
                                </svg>
                            </span>
                            <div class="text-sm sm:text-base text-zinc-700 dark:text-zinc-300 break-all">
                                <span class="block text-xs text-zinc-400 dark:text-zinc-500">
                                    {{ strip_tags(setting('contact_label_email', 'Email')) }}
                                </span>
                                {!! setting('email') !!}
                            </div>
                        </div>
                        <div class="flex items-start gap-3 group sm:col-span-2">
                            <span class="w-11 h-11 flex-shrink-0 flex items-center justify-center rounded-full
                                         bg-primary-50 dark:bg-primary-900/40
                                         text-primary-700 dark:text-primary-300
                                         ring-1 ring-primary-100 dark:ring-primary-800
                                         group-hover:bg-primary-700 group-hover:text-white
                                         transition-colors duration-300">
                                <svg class="w-4.5 h-4.5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5Z" />
                                </svg>
                            </span>
                            <div class="text-sm sm:text-base leading-relaxed text-zinc-700 dark:text-zinc-300">
                                <span class="block text-xs text-zinc-400 dark:text-zinc-500 mb-0.5">
                                    {{ strip_tags(setting('contact_label_address', 'Alamat')) }}
                                </span>
                                {!! setting('address') !!}
                            </div>
                        </div>
                    </ul>
                </div>
            </div>

            {{-- RIGHT — FORM --}}
            <div class="rounded-2xl
            mb-20 lg:mb-0
            border border-zinc-200 dark:border-zinc-800
            bg-white dark:bg-zinc-900
            p-4 sm:p-6 lg:p-8
            shadow-lg dark:shadow-black/40">

                <form
                    id="contactForm"
                    method="POST"
                    action="{{ route('contact.store') }}"
                    class="space-y-4 sm:space-y-5">
                    @csrf

                    {{-- NAMA --}}
                    <div>
                        <label class="mb-1 block
                           text-xs sm:text-sm
                           font-medium
                           text-zinc-700 dark:text-zinc-300">
                            {{ strip_tags(setting('contact_label_name', 'Nama')) }}
                        </label>
                        <input
                            type="text"
                            name="name"
                            required
                            placeholder="{{ strip_tags(setting('contact_placeholder_name', 'Nama lengkap Anda')) }}"
                            class="w-full rounded-lg border
                       border-zinc-300 dark:border-zinc-700
                       bg-white dark:bg-zinc-900
                       px-3.5 py-2.5 sm:px-4 sm:py-3
                       text-sm sm:text-base
                       text-zinc-900 dark:text-zinc-100
                       placeholder:text-zinc-400
                       focus:outline-none focus:ring-2 focus:ring-primary-500/30
                       transition" />
                    </div>

                    {{-- EMAIL --}}
                    <div>
                        <label class="mb-1 block
                           text-xs sm:text-sm
                           font-medium
                           text-zinc-700 dark:text-zinc-300">
                            {{ strip_tags(setting('contact_label_email_form', 'Email')) }}
                        </label>
                        <input
                            type="email"
                            name="email"
                            required
                            placeholder="{{ strip_tags(setting('contact_placeholder_email', 'contoh@mail.com')) }}"
                            class="w-full rounded-lg border
                       border-zinc-300 dark:border-zinc-700
                       bg-white dark:bg-zinc-900
                       px-3.5 py-2.5 sm:px-4 sm:py-3
                       text-sm sm:text-base
                       text-zinc-900 dark:text-zinc-100
                       placeholder:text-zinc-400
                       focus:outline-none focus:ring-2 focus:ring-primary-500/30
                       transition" />
                    </div>

                    {{-- WHATSAPP --}}
                    <div>
                        <label class="mb-1 block
                           text-xs sm:text-sm
                           font-medium
                           text-zinc-700 dark:text-zinc-300">
                            {{ strip_tags(setting('contact_label_whatsapp_form', 'Nomor WhatsApp')) }}
                        </label>
                        <input
                            type="tel"
                            name="whatsapp_number"
                            required
                            placeholder="{{ strip_tags(setting('contact_placeholder_whatsapp', '+6281234567890')) }}"
                            class="w-full rounded-lg border
                       border-zinc-300 dark:border-zinc-700
                       bg-white dark:bg-zinc-900
                       px-3.5 py-2.5 sm:px-4 sm:py-3
                       text-sm sm:text-base
                       text-zinc-900 dark:text-zinc-100
                       placeholder:text-zinc-400
                       focus:outline-none focus:ring-2 focus:ring-primary-500/30
                       transition" />
                    </div>

                    {{-- SUBJECT --}}
                    <div>
                        <label class="mb-1 block
                           text-xs sm:text-sm
                           font-medium
                           text-zinc-700 dark:text-zinc-300">
                            {{ strip_tags(setting('contact_label_subject', 'Subjek')) }}
                        </label>
                        <input
                            type="text"
                            name="subject"
                            placeholder="{{ strip_tags(setting('contact_placeholder_subject', 'Contoh: Kerja sama, Konsultasi')) }}"
                            class="w-full rounded-lg border
                       border-zinc-300 dark:border-zinc-700
                       bg-white dark:bg-zinc-900
                       px-3.5 py-2.5 sm:px-4 sm:py-3
                       text-sm sm:text-base
                       text-zinc-900 dark:text-zinc-100
                       placeholder:text-zinc-400
                       focus:outline-none focus:ring-2 focus:ring-primary-500/30
                       transition" />
                    </div>

                    {{-- MESSAGE --}}
                    <div>
                        <label class="mb-1 block
                           text-xs sm:text-sm
                           font-medium
                           text-zinc-700 dark:text-zinc-300">
                            {{ strip_tags(setting('contact_label_message', 'Pesan')) }}
                        </label>
                        <textarea
                            name="message"
                            rows="4"
                            required
                            placeholder="{{ strip_tags(setting('contact_placeholder_message', 'Tulis pesan Anda di sini...')) }}"
                            class="w-full resize-none rounded-lg border
                       border-zinc-300 dark:border-zinc-700
                       bg-white dark:bg-zinc-900
                       px-3.5 py-2.5 sm:px-4 sm:py-3
                       text-sm sm:text-base
                       text-zinc-900 dark:text-zinc-100
                       placeholder:text-zinc-400
                       focus:outline-none focus:ring-2 focus:ring-primary-500/30
                       transition"></textarea>
                    </div>

                    {{-- SUBMIT BUTTON --}}
                    <div class="flex justify-end">
                        <button
                            type="submit"
                            class="w-full sm:w-auto
               inline-flex items-center justify-center gap-2
               rounded-lg
               bg-primary-900 dark:bg-primary-100
               px-4 py-2.5 sm:px-5 sm:py-3
               text-sm sm:text-base font-medium
               text-white dark:text-primary-900
               shadow-sm
               hover:bg-primary-800 dark:hover:bg-primary-200
               transition-colors duration-200">
                            {{ strip_tags(setting('contact_button_submit', 'Kirim Pesan')) }}
                            <span class="text-base sm:text-lg">→</span>
                        </button>
                    </div>


                </form>
            </div>

        </div>
</section>


{{-- ================= ANIMATION ================= --}}
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll(".fade-slide");

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove("opacity-0", "translate-y-4");
                    entry.target.classList.add("opacity-100", "translate-y-0");
                    entry.target.style.transition =
                        "all 0.7s cubic-bezier(0.4, 0, 0.2, 1)";
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: "0px 0px -40px 0px"
        });

        elements.forEach(el => observer.observe(el));
    });
</script>

@endsection
