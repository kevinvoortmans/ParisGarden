@if(isset($postcontent))
    @php
        $postcontent = json_decode($postcontent);
    @endphp
    @foreach($postcontent->data as $block)
        @if($block->type == 'text')
            {!! $block->value !!}
        @endif
    @endforeach
@endif