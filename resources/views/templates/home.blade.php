@extends('base')

@section('body')

    @include('partials.parts.header')

    <div class="page-body">

        <div class="main-content">

            <div class="main-content-container">

                <div id="rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
                    <div id="rev_slider_container" class="rev_slider fullwidthabanner" data-version="5.4.1">
                        <ul>

                            <li data-transition="slideleft" data-slotamount="default" data-masterspeed="1500" data-thumb="{{ asset('images/slider/001-thumbs.jpg') }}" data-saveperformance="off" data-title="Intro">

                                <img src="{{ asset('images/slider/001.jpg') }}" alt="Slidebg" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgposition="center top" class="rev-slidebg" />

                                <div class="tp-caption tp-shape tp-shapewrapper" data-x="center" data-hoffset="0" data-y="middle" data-voffset="0" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames='[
                                                {
                                                    "from":"opacity:0;",
                                                    "speed":1500,
                                                    "to":"o:1;",
                                                    "delay":750,
                                                    "ease":"Power3.easeInOut"
                                                },
                                                {
                                                    "delay":"wait",
                                                    "speed":300,
                                                    "ease":"nothing"
                                                }
                                            ]' data-textAlign="left" data-paddingtop="0" data-paddingright="15" data-paddingbottom="0" data-paddingleft="15" style="z-index: 5; background-color:rgba(0, 0, 0, 0.30);">
                                </div>

                                <div class="tp-caption rs-heading-title light-color tp-resizeme" data-x="center" data-hoffset="0" data-y="middle" data-voffset="-85" data-fontsize="60" data-lineheight="60" data-width="1170" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[
                                                {
                                                    "delay":1000,
                                                    "speed":1500,
                                                    "frame":"0",
                                                    "from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                                                    "to":
                                                        "o:1;",
                                                        "ease":"Power4.easeInOut"
                                                },
                                                {
                                                    "delay":"wait",
                                                    "speed":800,
                                                    "frame":"999",
                                                    "to":"auto:auto;",
                                                    "ease":"Power3.easeInOut"
                                                }
                                            ]' data-textAlign="center" data-paddingtop="0" data-paddingright="15" data-paddingbottom="0" data-paddingleft="15">
                                    LANDSCAPING DESIGN
                                </div>

                                <div class="tp-caption rs-subtitle light-color tp-resizeme" data-x="center" data-hoffset="0" data-y="middle" data-voffset="0" data-fontsize="24" data-lineheight="34" data-width="830" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[
                                                {
                                                    "delay":1200,
                                                    "speed":1500,
                                                    "frame":"0",
                                                    "from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                                                    "to":
                                                        "o:1;",
                                                        "ease":"Power4.easeInOut"
                                                },
                                                {
                                                    "delay":"wait",
                                                    "speed":800,
                                                    "frame":"999",
                                                    "to":"auto:auto;",
                                                    "ease":"Power3.easeInOut"
                                                }
                                            ]' data-textAlign="center" data-paddingtop="0" data-paddingright="15" data-paddingbottom="0" data-paddingleft="15">
                                    Duis id rhoncus lacus. Nunc hendrerit, neque a mattis vestibulum, elit orci lacinia nulla, non malesuada quam sem ut ligula.
                                </div>

                                <div class="tp-caption rs-btn tp-resizeme" data-x="center" data-hoffset="0" data-y="middle" data-voffset="85" data-width="1170" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on" data-frames='[
                                                {
                                                    "delay":1400,
                                                    "speed":1500,
                                                    "frame":"0",
                                                    "from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;",
                                                    "to":
                                                        "o:1;",
                                                        "ease":"Power4.easeInOut"
                                                },
                                                {
                                                    "delay":"wait",
                                                    "speed":800,
                                                    "frame":"999",
                                                    "to":"auto:auto;",
                                                    "ease":"Power3.easeInOut"
                                                }
                                            ]' data-textAlign="center" data-paddingtop="0" data-paddingright="15" data-paddingbottom="0" data-paddingleft="15">
                                    <a href="#" class="btn btn-gfort-o">Discover More</a>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer" style="height: 8px; background-color: rgba(255, 255, 255, 0.50);"></div>
                    </div>
                </div>

                <!-- Service en kwaliteit -->
                <div class="gfort-section main-background-color">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-center light-color">
                                        <h2 class="section-main-title">{{ __('home.service_title') }}</h2>

                                        <p class="section-subtitle">{{ __('home.service_text') }}</p>

                                        <div class="cta-block-btn" style="margin: 25px 0px 0px 0px">
                                            <a href="#" class="btn btn-gfort-white">{{ __('home.realisations') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Services -->
                <div class="gfort-section">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-title text-center">
                                        <h2 class="section-main-title">{{ __('home.services_title') }}</h2>
                                        <div class="hr-divider hr-divider-style-1"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    @include('partials.parts.services')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonials -->
                <div class="gfort-section grey-background-color">
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


                <div class="gfort-section" id="contact">
                    <div class="section-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section-title section-title-md">
                                        <h2 class="section-main-title">{{ __('home.contact_title') }}</h2>
                                        <div class="hr-divider hr-divider-style-1"></div>
                                    </div>

                                    <div class="gfort-block text-block">
                                        <div class="gfort-block-container">
                                            <div class="gfort-block-body">
                                                <div class="gfort-block-content">
                                                    <p>{{ __('home.contact_text') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    @include('partials.contactForm')

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