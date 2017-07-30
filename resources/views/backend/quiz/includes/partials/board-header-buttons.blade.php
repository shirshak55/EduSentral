<div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.quiz.boards.index', trans('labels.backend.quiz.board.all'), [], ['class' => 'btn btn-primary btn-xs']) }}
    {{ link_to_route('admin.quiz.boards.create', trans('labels.backend.quiz.board.create'), [], ['class' => 'btn btn-success btn-xs']) }}
</div><!--pull right-->

<div class="pull-right mb-10 hidden-lg hidden-md">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('labels.quiz.board.main') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li>{{ link_to_route('admin.quiz.boards.index', trans('labels.backend.quiz.board.all')) }}</li>
            <li>{{ link_to_route('admin.quiz.boards.create', trans('labels.backend.quiz.board.create')) }}</li>
        </ul>
    </div>
</div>

<div class="clearfix"></div>