
<div class="form-block contact-form-block">
    <div class="form-block-container">
        @if (\Session::has('success'))
            <h4>{{ __('exception.contact_success') }}</h4>
        @endif

        {!! Form::open(['route' => 'contact.store']) !!}
        {!! Honeypot::generate('my_name', 'my_time') !!}
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('name', __('exception.contact_name')) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            {!! Form::label('email', __('exception.contact_email')) !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                {!! Form::label('message', __('exception.contact_message')) !!}
                {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                {!! Form::submit(__('exception.contact_submit'), ['class' => 'btn btn-gfort']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>