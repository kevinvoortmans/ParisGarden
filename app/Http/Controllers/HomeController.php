<?php

namespace App\Http\Controllers;

use App\Slideritem;

class HomeController extends BaseController
{
    CONST LAYOUT_PATH = 'templates.';

    $settings = settings();

    $seo = [];
    $seo['title'] = $settings->get('seo_title');
    $seo['description'] = $settings->get('description');
    $seo['image_url'] = $settings->get('image_url');

    public function index() {
        return $this->view(self::LAYOUT_PATH . 'home')
            ->with('slideritems', Slideritem::all())
            ->with('seo', $seo);
    }
}
