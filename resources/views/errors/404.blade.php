@extends('errors::minimal')

@section('title', __('Page Not Found'))
@section('code', '404')

@section('message')
<div class="mt-6 text-center">
    <p class="text-base sm:text-lg text-zinc-600 dark:text-zinc-400">
        {{ __('Sorry, the page you are looking for could not be found.') }}
    </p>

    <a
        href="{{ url('/') }}"
        class="mt-6 inline-flex items-center justify-center
               rounded-lg bg-blue-600 px-6 py-3
               text-sm sm:text-base font-medium text-white
               transition hover:bg-blue-700
               focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2
               dark:focus:ring-offset-zinc-900">
        {{ __('Back to Home') }}
    </a>
</div>
@endsection
