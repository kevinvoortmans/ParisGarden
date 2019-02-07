<?php

namespace App\Providers;

use App\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            'partials.parts.testimonials', 'App\Http\View\Composers\TestimonialComposer'
        );

        View::composer(
            'partials.parts.services', 'App\Http\View\Composers\ServiceComposer'
        );
    }
}
