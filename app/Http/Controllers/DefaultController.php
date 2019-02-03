<?php

namespace App\Http\Controllers;

class DefaultController extends BaseController
{
    CONST LAYOUT_PATH = 'templates.';

    public function index() {
        return $this->view(self::LAYOUT_PATH . 'default');
    }
}