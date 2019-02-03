@component('mail::message', ['data' => $data])
# Nieuw contact via de website.

Naam: {!! $data['name'] !!}<br>
E-mail: {!! $data['email'] !!}<br>
Bericht: {!! $data['message'] !!}<br>

@endcomponent
