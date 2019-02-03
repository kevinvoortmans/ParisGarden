<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends BaseController
{
    CONST LAYOUT_PATH = 'templates.';

    public function index() {
        return $this->view(self::LAYOUT_PATH . 'contact');
    }

    public function store(ContactFormRequest $request)
    {
        $contact = [];

        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['message'] = $request->get('message');

        $settings = settings();

        //Send mail
        Mail::to($settings->get('contact_mailto'))
            ->send(new Contact($contact));

        return redirect()->back()
            ->with('success', true);
    }
}