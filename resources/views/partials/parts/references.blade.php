<div class="blog-items-wrapper recent-blog-posts blog-col-3">
    @foreach($references as $reference)
        <article class="blog-item format-standard">
            <div class="blog-item-container">
                <div class="blog-item-media">
                    <a href="{{ route('reference.detail', ['slug' => $reference->slug]) }}" title="{{ $reference->name }}" class="overlay-hover-2x scale-hover">
                        <img src="{{ asset('storage/'. $reference->image) }}">
                    </a>
                </div>

                <div class="blog-item-body">
                    <h2 class="blog-item-title">
                        <a href="{{ route('reference.detail', ['slug' => $reference->slug]) }}" title="{{ $reference->name }}">{{ $reference->name }}</a>
                    </h2>

                    <div class="blog-item-description">
                        <p>{{ $reference->description }}</p>
                    </div>

                    <div class="blog-item-read-btn">
                        <a href="{{ route('reference.detail', ['slug' => $reference->slug]) }}">{{ __('general.read_more') }} <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </article>
    @endforeach
</div>