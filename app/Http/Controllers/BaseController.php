<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    public function view($path){
        return view($path)
            ->with('context', $this->getContext());
    }

    protected function getContext() {
        $settings = settings();

        return [
            'site' => $settings->get('website_name'),
            'gtm' => $settings->get('gtm')
        ];
    }
}