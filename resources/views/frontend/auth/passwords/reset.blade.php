@extends('frontend.layouts.app')

@section('title', app_name() . ' | Reset Password')

@section('content')

<div class="row">
    <div class="col-md-8 offset-2">
        <div class="card mb-4">
            <div class="card-header">{{ trans('labels.frontend.auth.register_box_title') }}</div>

            <div class="card-block">
                {{ Form::open(['route' => 'frontend.auth.password.reset', 'class' => 'form-horizontal']) }}
                    <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) }}
                            <div class="col-md-6">
                                <p class="form-control-static">{{ $email }}</p>
                                {{ Form::hidden('email', $email, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                            </div>
                        </div>
                    <div class="form-group row">
                        {{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        {{ Form::label('password_confirmation', trans('validation.attributes.frontend.password_confirmation'), ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password_confirmation')]) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit(trans('labels.frontend.passwords.reset_password_button'), ['class' => 'btn btn-primary']) }}
                        </div>
                    </div>
                {{ Form::close() }}
            </div>

        </div>

    </div>
</div>
@endsection
