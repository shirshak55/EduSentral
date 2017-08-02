@extends('frontend.layouts.app')

@section('title', app_name() . ' | Reset Password')

@section('content')
<div class="col-md-8 offset-2">
    <div class="card mb-4">
        <div class="card-header">{{ trans('labels.frontend.passwords.reset_password_box_title') }}</div>

        <div class="card-block">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            {{ Form::open(['route' => 'frontend.auth.password.email.post', 'class' => 'form-horizontal']) }}

            <div class="form-group row">
                {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 col-form-label']) }}
                <div class="col-md-6">
                    {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 col-md-offset-4">
                    {{ Form::submit(trans('labels.frontend.passwords.send_password_reset_link_button'), ['class' => 'btn btn-primary']) }}
                </div>
            </div>

            {{ Form::close() }}

        </div>

    </div>
</div>
@endsection