@extends('frontend.layouts.app')

@section('title', app_name() . ' | Login')

@section('content')

<div class="col-md-8 offset-2">
    <div class="card mb-4">
        <div class="card-header">{{ trans('labels.frontend.auth.login_box_title') }}</div>

        <div class="card-block">
            {{ Form::open(['route' => 'frontend.auth.login.post', 'class' => 'form-horizontal']) }}
                <div class="form-group row">
                    {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-4 col-form-label']) }}
                    <div class="col-8">
                        {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-4 col-form-label']) }}
                    <div class="col-8">
                        {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-8 offset-4">
                        <div class="checkbox">
                            <label>
                                {{ Form::checkbox('remember') }} {{ trans('labels.frontend.auth.remember_me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-8 offset-2">
                        <div class="btn-group">
                            <button type='submit' class='btn btn-primary'>{{ trans('labels.frontend.auth.login_button') }}</button>
                            <a href="{{ route('frontend.auth.password.reset') }}" class= 'btn btn-danger'>{{ trans('labels.frontend.passwords.forgot_password') }}</a>
                            <a href="{{ route('frontend.auth.password.reset') }}" class= 'btn btn-warning'>Register</a>
                        </div>
                    </div>
                </div>
            {{ Form::close() }}


            <div class="row text-center">
                {!! $socialite_links !!}
            </div>
        </div>

    </div>

</div>
@endsection