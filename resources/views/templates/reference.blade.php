@extends('base')

@section('body')

    @include('partials.parts.header')
    @php
        $headerImage = asset('images/slider/003.jpg');
        if(!empty($page->header_image)) {
            $headerImage = asset('storage/' . $page->header_image);
        }

    @endphp

    <div class="page-title-section parallax-section" style="background-image: url({{ $headerImage }});">

        <div class="section-container">

            <div class="breadcrumb-title light-color">

                <div class="container">
                    <h1 class="breadcrumb-main-title">{{ $page->name }}</h1>
                </div>
            </div>

            <div class="breadcrumb-block">

                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li class="active">{{ $page->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">

        <div class="main-content">

            <div class="main-content-container">

                <!-- Testimonials -->
                <div class="gfort-section white-background-color">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-center">
                                        <h2 class="section-main-title">{{ __('home.testimonials_title') }}</h2>
                                        <div class="hr-divider hr-divider-style-1"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    @include('partials.parts.testimonials')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="gfort-section grey-background-color">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="gallery-items-wrapper gallery-col-3 isotope-masonry" style="position: relative; height: 478.532px;">
                                        @if(isset($page->images))
                                            @foreach($page->images as $image)
                                                <div class="gallery-item isotope-item" style="position: absolute; left: 0%; top: 0px;">
                                                    <a href="{{ asset('storage/' . $image['image']) }}" class="scale-hover overlay-hover-2x" data-gfort-lightbox="" data-gfort-lightbox-group="gallery-2">
                                                        <img src="{{ asset('storage/' . $image['image']) }}">
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


                <!-- Testimonials -->
                <div class="gfort-section" id="reference">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    @include('partials.parts.postcontent', ['postcontent' => $page->body])
                                </div>
                                <div class="col-md-6">
                                    @include('partials.referenceForm')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.parts.footer')

@endsection