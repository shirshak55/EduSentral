@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.quiz.board.management') . ' | ' . trans('labels.backend.quiz.board.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.quiz.board.management') }}
        <small>{{ trans('labels.backend.quiz.board.create') }}</small>
    </h1>
@endsection

@section('content')
    <form method="POST" action="{{ route('admin.quiz.boards.store') }}" accept-charset="UTF-8" class="form-horizontal" role="form" id="create-board" enctype="multipart/form-data">
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
                    <label for="name" class="col-lg-2 control-label">{{ trans('validation.attributes.backend.quiz.boards.name') }}</label>
                    <div class="col-lg-10">
                        <input class="form-control" maxlength="191" required="required" autofocus="autofocus" placeholder="{{ trans('validation.attributes.backend.quiz.boards.name') }}" name="name" type="text" id="name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-lg-2 control-label">{{ trans('validation.attributes.backend.quiz.boards.description') }}</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" placeholder="{{ trans('validation.attributes.backend.quiz.boards.description') }}" name="description" cols="50" rows="10" id="description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="location" class="col-lg-2 control-label">{{ trans('validation.attributes.backend.quiz.boards.location') }}</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" placeholder="{{ trans('validation.attributes.backend.quiz.boards.location') }}" name="location" cols="50" rows="10" id="location"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-lg-2 control-label">{{ trans('validation.attributes.backend.quiz.boards.image') }}</label>
                    <div class="col-lg-10">
                        <input name="image" type="file" id="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-success">
            <div class="box-body">
                <div class="pull-left">
                    {{ link_to_route('admin.quiz.boards.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-xs']) }}
                </div>
                <div class="pull-right">
                    <input class="btn btn-success btn-xs" type="submit" value="Update">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </form>
@endsection