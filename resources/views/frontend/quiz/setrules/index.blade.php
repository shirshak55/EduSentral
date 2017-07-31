@extends('frontend.layouts.app')

@section('title',  'All Sets Of '. $set->name .' | '.app_name())

@section('content')
<div class="jumbotron">
    <h1>{{ $set->name }}</h1>
    <div class="table-responsive">
        <table class='table table-bordered'>
            <tr class='table-warning'>
                <td>Set Name</td>
                <td>{{ $set->name }}</td>
            </tr>

            <tr class='table-danger'>
                <td>Year</td>
                <td>{{ $set->year }}</td>
            </tr>

            <tr class='table-info'>
                <td>Board</td>
                <td>{{ $set->board->name }}</td>
            </tr>

            <tr class='table-success'>
                <td>Marks</td>
                <td>{{ $set->questions->sum('marks') }}</td>
            </tr>

            <tr class='table-success'>
                <td>Total Number of Questions</td>
                <td>{{ $set->questions->count() }}</td>
            </tr>

        </table>
    </div>

    <code>According to board the following rules will appear in examination. You need to agree with it.</code>
</div>

<div class="card mb-3">
    <div class="card-header">
        <h4 class="card-title">Rules for {{ $set->name }}</h4>
    </div>
    <div class="card-block">
        {!! $set->rule->content !!}
    </div>
    <div class="card-footer">
        <a href="{{ route('frontend.quiz.set.questions',$set) }}" class='btn btn-primary float-right'>I agree with this rules</a>
    </div>
</div>


@endsection

@section('after-styles')
<style>
    table td{
        text-align:center;
    }
</style>
@endsection