<!DOCTYPE html>
<html lang="nl">
    <head>
        @include('partials.meta')

        @include('partials.stylesheets')

        @include('partials.gtm.head')

        <link rel="icon" type="image/png" href="{{asset('images/favicon-32x32.png')}}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{asset('images/favicon-16x16.png')}}" sizes="16x16" />

    </head>
    <body>
        @include('partials.gtm.body')

        <a href="#" class="btn-gfort-top"><i class="fa fa-angle-up"></i></a>

        <div id="main-wrapper">

        @yield('body')

        </div>


        @include('cookieConsent::index')


        @include('partials.scripts')

    </body>
</html>