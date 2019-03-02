<div class="gfort-owl-slider owl-carousel owl-theme" data-slider-items="1" data-slider-items-md="1" data-slider-arrows="true" data-slider-arrows-type="arrow" data-slider-dots="true" data-slider-autoplay="true" data-slider-items-space="30">
    @foreach($testimonials as $testimonial)
    <div class="gfort-owl-slider-item">
        <div class="testimonials-item testimonials-item-style-2">
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
                    <div class="gallery-items-wrapper gallery-col-1 isotope-masonry" style="position: relative; height: 478.532px;">
                        @if($testimonial->image)
                            @php
                                $image = $testimonial->image;
                            @endphp
                                <div class="gallery-item isotope-item" style="position: absolute; left: 0%; top: 0px;">
                                    <a href="{{ asset('storage/' . $image) }}" class="scale-hover overlay-hover-2x" data-gfort-lightbox="" data-gfort-lightbox-group="gallery-2">
                                        <img src="{{ asset('storage/' . $image) }}">
                                    </a>
                                </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
   @endforeach
</div>