<div class="pull-right mb-10 hidden-sm hidden-xs">
    {{ link_to_route('admin.quiz.rules.index', trans('labels.backend.quiz.rule.all'), [], ['class' => 'btn btn-primary btn-xs']) }}
    {{ link_to_route('admin.quiz.rules.create', trans('labels.backend.quiz.rule.create'), [], ['class' => 'btn btn-success btn-xs']) }}
</div><!--pull right-->

<div class="pull-right mb-10 hidden-lg hidden-md">
    <div class="btn-group">
        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            {{ trans('labels.quiz.rule.main') }} <span class="caret"></span>
        </button>

        <ul class="dropdown-menu" role="menu">
            <li>{{ link_to_route('admin.quiz.rules.index', trans('labels.backend.quiz.rule.all')) }}</li>
            <li>{{ link_to_route('admin.quiz.rules.create', trans('labels.backend.quiz.rule.create')) }}</li>
        </ul>
    </div>
</div>

<div class="clearfix"></div>