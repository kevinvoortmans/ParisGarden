<?php

namespace App\Http\Controllers;

class HomeController extends BaseController
{
    CONST LAYOUT_PATH = 'templates.';

    public function index() {
        return $this->view(self::LAYOUT_PATH . 'home');
    }
}