<?php

namespace App\Http\View\Composers;

use App\Reference;
use Illuminate\View\View;

class ReferenceComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('references', Reference::all());
    }
}