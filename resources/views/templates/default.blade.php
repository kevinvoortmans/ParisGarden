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
                <div class="gfort-section">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    @include('partials.parts.postcontent', ['postcontent' => $page->body])
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
