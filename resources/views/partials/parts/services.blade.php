<div class="blog-items-wrapper recent-blog-posts blog-col-3">
    @php
        $i = 0;
    @endphp
    @foreach($services as $service)
        @if($i < 3)
        <article class="blog-item format-standard">
            <div class="blog-item-container">
                <div class="blog-item-media">
                    <a href="{{ route('service.detail', ['slug' => $service->slug]) }}" title="{{ $service->name }}" class="overlay-hover-2x scale-hover">
                        <img src="{{ asset('storage/'. $service->image) }}">
                    </a>
                </div>

                <div class="blog-item-body">
                    <h2 class="blog-item-title">
                        <a href="{{ route('service.detail', ['slug' => $service->slug]) }}" title="{{ $service->name }}">{{ $service->name }}</a>
                    </h2>

                    <div class="blog-item-description">
                        <p>{{ $service->description }}</p>
                    </div>

                    <div class="blog-item-read-btn">
                        <a href="{{ route('service.detail', ['slug' => $service->slug]) }}">{{ __('general.read_more') }} <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </article>
            @php
                $i++;
            @endphp
        @endif
    @endforeach
</div>