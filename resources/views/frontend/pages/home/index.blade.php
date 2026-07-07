@extends('frontend.layouts.app')

@section('title', strip_tags($title) . ' - ' . strip_tags(setting('site_name', 'lexterasurveyindonesia.com')))

@section('description', 'PT. Lextera Survey Indonesia adalah penyedia solusi survei dan geospasial nasional, distributor utama ComNav Technology di Indonesia.')

@push('head')
<meta property="og:title" content="PT. Lextera Survey Indonesia" />
<meta property="og:description" content="Solusi survei dan geospasial akurat, andal, dan efisien biaya." />
<meta property="og:image" content="{{ asset('storage/seo/lextera-og.jpg') }}" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:type" content="website" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="PT. Lextera Survey Indonesia" />
<meta name="twitter:description" content="Solusi survei dan geospasial akurat, andal, dan efisien biaya." />
<meta name="twitter:image" content="{{ asset('storage/seo/lextera-og.jpg') }}" />
@endpush

@section('content')
@include('frontend.pages.home.sections.hero')
@include('frontend.pages.home.sections.company')
@include('frontend.pages.home.sections.product')
@include('frontend.pages.home.sections.whyus')
@include('frontend.pages.home.sections.partners')
@include('frontend.pages.home.sections.management')
@include('frontend.pages.home.sections.news')
<!-- @include('frontend.pages.home.sections.testimonials') -->
<!-- @include('frontend.pages.home.sections.contactmessage') -->
@endsection