@extends('layouts.template-1')
@push('title')
    <title>{{$content->title}}</title>
@endpush
@push('body')
    <body class="{{$configSite->separator_style}} {{$configSite->color_style}}">
@endpush
@section('content')
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="img/styleswitcher/logos/logos-dark/orange.png" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Configuração: style -->
    @include('configuration.style-1')

    <div class="wrapper">
        <!-- Header -->
        @include('headers.header-1')
        <!-- Slider -->
        <section class="mainslider" id="mainslider">
            @include('home.mainslider.'.$configSite->mainslider)
        </section>

        <!-- About Section -->
        @include('abouts.about-1')
        <!-- Project Section
        include('projects.project-1')
        -->
        <!-- Testimonials Section -->
        @include('testimonials.testimonial-1')
        <!-- Portfolio Section -->
        @include('portfolios.portfolio-1')
        <!-- Facts Section -->
        @include('facts.fact-1')
        <!-- Team Section -->
        @include('teams.team-1')
        <!-- Newsletter Section -->
        @include('newsletters.newsletter-1')
        <!-- Blog Section
        include('blogs.blog-1')
        -->
        <!-- Video Section -->
        @include('videos.video-1')
        <!-- Contact Section -->
        @include('contacts.contact-1')

        <!-- Services Section -->
        @include('services.service-1')

    <!-- Logos Brands
        include('brands.brand-1')
        -->
        <!-- Footer Section -->
        @include('footers.footer-1')
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper" class="d-none d-sm-block">
            <p id="back-top">
                <a href="index.html#top"><span></span></a>
            </p>
        </div>
    </div>
@endsection