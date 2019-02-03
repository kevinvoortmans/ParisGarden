
@if (\Session::has('success'))
    {{ __('exception.contact_success') }}
@endif

{!! Form::open(['route' => 'contact.store']) !!}
{!! Honeypot::generate('my_name', 'my_time') !!}
<div class="form-group">
    {!! Form::label('name', __('exception.contact_name')) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', __('exception.contact_email')) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('message', __('exception.contact_message')) !!}
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit(__('exception.contact_submit'), ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}