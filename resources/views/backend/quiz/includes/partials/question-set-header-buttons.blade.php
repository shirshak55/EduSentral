<div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.quiz.sets.index', trans('labels.backend.quiz.set.all'), [], ['class' => 'btn btn-primary btn-xs']) }}
    {{ link_to_route('admin.quiz.sets.create', trans('labels.backend.quiz.set.create'), [], ['class' => 'btn btn-success btn-xs']) }}
</div><!--pull right-->

<div class="pull-right mb-10 hidden-lg hidden-md">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('labels.quiz.sets.main') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li>{{ link_to_route('admin.quiz.sets.index', trans('labels.backend.quiz.set.all')) }}</li>
            <li>{{ link_to_route('admin.quiz.sets.create', trans('labels.backend.quiz.set.create')) }}</li>
        </ul>
    </div>
</div>

<div class="clearfix"></div>