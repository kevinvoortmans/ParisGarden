<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=5">
<meta name="csrf-token" content="{{ csrf_token() }}">
@if(isset($seo) && isset($seo['title']) && !empty($seo['title']))
    <title>{{ $seo['title'] }}</title>
@else
    <title>{{ $context['site'] }}@if(isset($pageTitle) && $pageTitle) | {{ $pageTitle }}@endif</title>
@endif

@if(isset($seo) && !empty($seo))
    <meta name="twitter:card" content="summary">
    <meta property="og:type" content="article" />
    @if(isset($seo['title']) && !empty($seo['title']))
        <meta name="twitter:title" content="{{ $seo['title'] }}">
        <meta property="og:title" content="{{ $seo['title'] }}" />
    @endif
    @if(isset($seo['description']) && !empty($seo['description']))
        <meta name="description" content="{{$seo['description']}}">
        <meta name="twitter:description" content="{{ $seo['description'] }}">
        <meta property="og:description" content="{{ $seo['description'] }}" />
    @endif
    @if(isset($seo['image']) && !empty($seo['image']))
        <meta name="twitter:image" content="{{ asset('storage/' . $seo['image']) }}">
        <meta property="og:image" content="{{ asset('storage/' . $seo['image']) }}" />
    @endif
    <meta property="og:url" content="{{ Request::url() }}" />
@endif

<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">