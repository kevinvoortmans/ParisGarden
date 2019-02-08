<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Service;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceController extends BaseController
{
    CONST LAYOUT_PATH = 'templates.';

    public function index() {
        return $this->view(self::LAYOUT_PATH . 'services');
    }

    public function detail($slug) {
        $service = Service::where('slug->'.LaravelLocalization::getCurrentLocale(), $slug)->first();

        if (!$service) {
            abort(404);
        }

        return $this->view(self::LAYOUT_PATH . 'service')
            ->with('service', $service)
            ->with('seo', $service->getSeo());
    }

}