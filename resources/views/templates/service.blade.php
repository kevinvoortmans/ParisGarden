@extends('base')

@section('body')

    @include('partials.parts.header')

    @php
        $headerImage = asset('images/slider/003.jpg');
        if(!empty($service->header_image)) {
            $headerImage = asset('storage/' . $service->header_image);
        }

    @endphp

    <div class="page-title-section parallax-section" style="background-image: url({{ $headerImage }});">
        <div class="section-container">
            <div class="breadcrumb-title light-color">
                <div class="container">
                    <h1 class="breadcrumb-main-title">{{ $service->name }}</h1>
                </div>
            </div>

            <div class="breadcrumb-block">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="">Diensten</a></li>
                        <li class="active">{{ $service->name }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="main-content">
            <div class="main-content-container">
                <div class="gfort-section">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="blog-items-wrapper blog-single-item">
                                        <article class="blog-item format-standard">
                                            <div class="blog-item-container">
                                                <div class="blog-item-body">
                                                    <div class="blog-item-description">
                                                        <p>
                                                            @if(!empty($service->image))
                                                                <img class="alignright" src="{{ asset('storage/' . $service->image) }}" width="40%" style="margin-top: 30px">
                                                            @endif
                                                            {!! $service->body !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gfort-section main-background-color">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-center light-color">
                                        <h2 class="section-main-title">{{ __('service.service_title', ['name' => strtolower($service->name)]) }}</h2>

                                        <p class="section-subtitle">{{ $service->selling_text }}</p>

                                        <div class="cta-block-btn" style="margin: 25px 0px 0px 0px">
                                            <a href="{{ route(1) }}" class="btn btn-gfort-white">{{ __('service.contact') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="gfort-section">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <!--<div class="col-md-12">
                                    <div class="section-title text-center">
                                        <h2 class="section-main-title">3 COLUMNS</h2>
                                    </div>
                                </div>-->

                                <div class="col-md-12">

                                    <div class="gallery-items-wrapper gallery-col-3 isotope-masonry" style="position: relative; height: 478.532px;">
                                        @if(sizeof($service->images) > 0)
                                            @foreach($service->images as $image)
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
                </div>
            </div>
        </div>
    </div>



    @include('partials.parts.footer')

@endsection