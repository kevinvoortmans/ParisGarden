@extends('base')

@section('body')

    @include('partials.parts.header')
    @php
        $headerImage = asset('images/slider/003.jpg');
        if(!empty($page->header_image)) {
            $headerImage = asset('storage/' . $reference->header_image);
        }

    @endphp

    <div class="page-title-section parallax-section" style="background-image: url({{ $headerImage }});">

        <div class="section-container">

            <div class="breadcrumb-title light-color">

                <div class="container">
                    <h1 class="breadcrumb-main-title">{{ $reference->name }}</h1>
                </div>
            </div>

            <div class="breadcrumb-block">

                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>
                        <li><a href="{{ route('3') }}">Referenties</a></li>
                        <li class="active">{{ $reference->name }}</li>
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
                                                            @if(!empty($reference->image))
                                                                <img class="alignright" src="{{ asset('storage/' . $reference->image) }}" width="40%" style="margin-top: 30px">
                                                            @endif
                                                            {!! $reference->body !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
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
                                        @if(is_array($reference->images))
                                            @foreach($reference->images as $image)
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