@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.quiz.board.management'))

@section('after-styles')
    {{ Html::style("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.css") }}
@endsection

@section('page-header')
    <h1>{{ trans('labels.backend.quiz.board.management') }}</h1>
@endsection


@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.quiz.board.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.quiz.includes.partials.board-header-buttons')
            </div>
        </div>

        <div class="box-body">
            <div class="table-responsive">
                <table id="boards-table" class="table table-condensed table-hover">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.quiz.board.table.id') }}</th>
                            <th>{{ trans('labels.backend.quiz.board.table.name') }}</th>
                            <th>{{ trans('labels.backend.quiz.board.table.location') }}</th>
                            <th>{{ trans('labels.backend.quiz.board.table.added_on') }}</th>
                            <th>{{ trans('labels.backend.quiz.board.table.udpated_on') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            {!! history()->renderType('Board') !!}
        </div>
    </div>
@endsection


@section('after-scripts')
    {{ Html::script("https://cdn.datatables.net/v/bs/dt-1.10.15/datatables.min.js") }}

        <script>
            $(function() {
                $('#boards-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: '{{ route("admin.quiz.boards.get") }}',
                        type: 'post'
                    },
                    columns: [
                        {data: 'id', name: 'boards.id'},
                        {data: 'name', name: 'boards.name'},
                        {data: 'location', name: 'boards.location'},
                        {data: 'created_at', name: 'boards.created_at'},
                        {data: 'updated_at', name: 'boards.updated_at'},
                        {data: 'actions', name: 'actions', searchable: false, sortable: false}
                    ],
                    order: [[2, "asc"]],
                    searchDelay: 500
                });
            });
        </script>

@endsection