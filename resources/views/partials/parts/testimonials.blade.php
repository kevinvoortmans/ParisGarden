<div class="gfort-owl-slider owl-carousel owl-theme" data-slider-items="1" data-slider-items-md="1" data-slider-arrows="true" data-slider-arrows-type="arrow" data-slider-dots="true" data-slider-autoplay="true" data-slider-items-space="30">
    @foreach($testimonials as $testimonial)
    <div class="gfort-owl-slider-item">
        <div class="testimonials-item testimonials-item-style-3">
            <div class="testimonials-item-container">
                <div class="testimonials-item-body">
                    <p>{{ $testimonial->text }}</p>
                </div>

                <div class="testimonials-item-footer">
                    <div class="testimonials-item-meta">
                        <div class="testimonials-item-meta-container">
                            <h5 class="testimonials-item-name">{{ $testimonial->name }}</h5>
                            @if(!empty($testimonial->function) || !empty($testimonial->company))
                                <p class="testimonials-item-subtitle">
                                    @if(!empty($testimonial->function))
                                        {{ $testimonial->function }} @if(!empty($testimonial->company))-@endif
                                    @endif
                                    @if(!empty($testimonial->company))
                                        <a href="#">{{ $testimonial->company }}</a>
                                    @endif
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @endforeach
</div>