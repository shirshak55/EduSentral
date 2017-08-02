@extends('frontend.layouts.app')

@section('title', app_name() . ' | Register')

@section('content')
<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card mb-4">
            <div class="card-header">{{ trans('labels.frontend.auth.register_box_title') }}</div>

            <div class="card-block">
                {{ Form::open(['route' => 'frontend.auth.register.post', 'class' => 'form-horizontal']) }}
                    <div class="form-group row">
                        {{ Form::label('first_name', trans('validation.attributes.frontend.first_name'),
                        ['class' => 'col-4 col-form-label']) }}
                        <div class="col-6">
                            {{ Form::text('first_name', null,
                            ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.first_name')]) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('last_name', trans('validation.attributes.frontend.last_name'),
                        ['class' => 'col-4 col-form-label']) }}
                        <div class="col-6">
                            {{ Form::text('last_name', null,
                            ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.last_name')]) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-4 col-form-label']) }}
                        <div class="col-6">
                            {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-4 col-form-label']) }}
                        <div class="col-6">
                            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('password_confirmation', trans('validation.attributes.frontend.password_confirmation'), ['class' => 'col-4 col-form-label']) }}
                        <div class="col-6">
                            {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password_confirmation')]) }}
                        </div>
                    </div>

                    @if (config('access.captcha.registration'))
                        <div class="form-group row">
                            <div class="col-6 col-md-offset-4">
                                {!! Form::captcha() !!}
                                {{ Form::hidden('captcha_status', 'true') }}
                            </div>
                        </div>
                    @endif

                    <div class="form-group row">
                        <div class="col-6 col-md-offset-4">
                            {{ Form::submit(trans('labels.frontend.auth.register_button'), ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>

        </div>

    </div>
</div>
@endsection

@section('after-scripts')
    @if (config('access.captcha.registration'))
        {!! Captcha::script() !!}
    @endif
@endsection