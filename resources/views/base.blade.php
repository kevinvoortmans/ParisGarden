<!DOCTYPE html>
<html>
    <head>
        @include('partials.meta')

        @include('partials.stylesheets')

        @include('partials.gtm.head')

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