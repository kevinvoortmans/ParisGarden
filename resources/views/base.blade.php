<!DOCTYPE html>
<html>
    <head>
        @include('partials.meta')

        @include('partials.stylesheets')

        @include('partials.gtm.head')

    </head>
    <body>
        @include('partials.gtm.body')


        @yield('body')


        @include('cookieConsent::index')


        @include('partials.scripts')

    </body>
</html>