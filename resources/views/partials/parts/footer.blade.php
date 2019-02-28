<footer class="footer-section">

    <!-- Testimonials -->
    <div class="gfort-section grey-background-color">
        <div class="section-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{asset('images/5.png')}}" alt="Embleem" class="round"/>
                    </div>
                    <div class="col-md-4">
                        <div class="section-title text-center">
                            <h2 class="section-main-title">{{ __('footer.block_title') }}</h2>
                        </div>
                        <p>{{ __('footer.block_text') }}</p>
                        <div class="text-center">
                            <a href="{{ route(__('footer.block_route')) }}" class="btn btn-gfort-o" aria-label="knop">{{ __('footer.block_button') }}</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('images/embleem.png')}}" alt="Embleem" class="round"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top-section">
        <div class="footer-top-section-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget-block widget-block-text">
                            <div class="widget-block-container">
                                <div class="widget-block-title">
                                    <h6>{{ settings()->get('website_name') }}</h6>
                                </div>

                                <div class="widget-block-body">
                                    <p>{{ settings()->get('contact_vat') }}</p>
                                    <p>{{ settings()->get('contact_street') }}</p>
                                    <p>{{ settings()->get('contact_city') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget-block widget-block-text">
                            <div class="widget-block-container">
                                <div class="widget-block-title">
                                    <h6>{{ __('footer.contact_title') }}</h6>
                                </div>

                                <div class="widget-block-body">
                                    <p><a href="mailto:{{ settings()->get('contact_mailto') }}">{{ settings()->get('contact_mailto') }}</a></p>
                                    <p><a href="tel:{{ settings()->get('contact_phone') }}" title="{{ settings()->get('contact_phone') }}">{{ settings()->get('contact_phone') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget-block widget-block-twitter">
                            <div class="widget-block-container">
                                <div class="widget-block-title">
                                    <h6>{{ __('footer.social_media_title') }}</h6>
                                </div>

                                <div class="widget-block-body">
                                    <div class="social-icons-block icons-style-2">
                                        <ul>
                                            @if(settings()->get('facebook_url'))
                                            <li>
                                                <a href="{{ settings()->get('facebook_url') }}" title="Facebook">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            @endif
                                            @if(settings()->get('instagram_url'))
                                            <li>
                                                <a href="{{ settings()->get('instagram_url') }}" title="Instagram">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            @endif
                                            @if(settings()->get('twitter_url'))
                                            <li>
                                                <a href="{{ settings()->get('twitter_url') }}" title="Twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-section">
        <div class="footer-copyright-section-container">
            <div class="container">
                <div class="row">
                    <div class="copyright-widget widget-left-side">
                        <div class="copyright-widget-container">
                            <div class="info-block">
                                <div class="info-block-container">
                                    <p>Copyright &copy; {{ settings()->get('website_name') }} {{ Carbon\Carbon::now()->format('Y') }}. {{ __('exception.copyright') }}<p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="copyright-widget widget-right-side">
                        <div class="copyright-widget-container">
                            <div class="info-block">
                                <div class="info-block-container">
                                    <p>{{ __('exception.made_by') }}: <a href="https://digi-johnny.be">Digi Johnny</a> & <a href="https://abeconsultancy.be">Abé Consultancy</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>