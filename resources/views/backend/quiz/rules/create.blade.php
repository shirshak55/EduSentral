@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.quiz.rule.management') . ' | ' . trans('labels.backend.quiz.rule.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.quiz.rule.management') }}
        <small>{{ trans('labels.backend.quiz.rule.create') }}</small>
    </h1>
@endsection

@section('content')
    <form method="POST" action="{{ route('admin.quiz.rules.store') }}" accept-charset="UTF-8" class="form-horizontal" role="form" id="create-rule" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.quiz.board.create') }}</h3>
                <div class="box-tools pull-right">
                    @include('backend.quiz.includes.partials.board-header-buttons')
                </div>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">{{ trans('validation.attributes.backend.quiz.rule.name') }}</label>

                    <div class="col-lg-10">
                        <input class="form-control" maxlength="191" required="required" autofocus="autofocus" placeholder="{{trans('validation.attributes.backend.quiz.rule.name')}}" name="name" type="text" id="name">
                    </div>
                </div>


                <div class="form-group">
                    <label for="content" class="col-lg-2 control-label">{{ trans('validation.attributes.backend.quiz.rule.content') }}</label>

                    <div class="col-lg-10">
                        <textarea class="form-control" placeholder="{{ trans('validation.attributes.backend.quiz.rule.content') }}" name="content" cols="50" rows="10" id="content"></textarea>
                    </div>
                </div>
            </div>

        </div>
        <div class="box box-success">
            <div class="box-body">
                <div class="pull-left">
                    {{ link_to_route('admin.quiz.rules.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
                </div>
                <div class="pull-right">
                    <input class="btn btn-success btn-xs" type="submit" value="Create">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </form>
@endsection