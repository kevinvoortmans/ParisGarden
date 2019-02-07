<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Testimonial;

class TestimonialComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('testimonials', Testimonial::all());
    }
}