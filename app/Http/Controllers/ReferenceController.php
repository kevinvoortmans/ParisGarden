<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReferenceFormRequest;
use App\Mail\Reference;
use Illuminate\Support\Facades\Mail;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ReferenceController extends BaseController
{
    CONST LAYOUT_PATH = 'templates.';

    public function index() {
        return $this->view(self::LAYOUT_PATH . 'references');
    }

    public function store(ReferenceFormRequest $request)
    {
        $contact = [];

        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['message'] = $request->get('message');

        $settings = settings();

        //Send mail
        Mail::to($settings->get('contact_mailto'))
            ->send(new Reference($contact));

        return redirect(url()->previous().'#reference')
            ->with('success', true);
    }

    public function detail($slug) {
        $reference = \App\Reference::where('slug->'.LaravelLocalization::getCurrentLocale(), $slug)->first();

        if (!$reference) {
            abort(404);
        }

        return $this->view(self::LAYOUT_PATH . 'reference')
            ->with('reference', $reference)
            ->with('seo', $reference->getSeo());
    }
}