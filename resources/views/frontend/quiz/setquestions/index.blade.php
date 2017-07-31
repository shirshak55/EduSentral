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

                <tr class='table-danger'>
                    <td>Total Number of Questions</td>
                    <td>{{ $set->questions->count() }}</td>
                </tr>

            </table>
        </div>

    </div>

    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('frontend.quiz.results') }}" method='POST' enctype="multipart/form-data">
                {{ csrf_field() }}
                @foreach($questions as $question)
                    <div class="card mb-4">
                        <div class="card-header">Question Number {{ $question->sort }}</div>
                        <div class="card-block">
                            <p class='card-text'>{!! $question->content !!}</p>
                            <ul class='list-group'>
                                @foreach($question->answers as $answer)
                                    <li class='list-group-item'>
                                        <input type="checkbox" class='question_list_checkbox' name='answer_{{ $question->id }}_{{ $answer->id }}'>
                                        {{ $answer->content }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach

                    <div class="card mb-4">
                        <div class="card-header">Submit To Get Result</div>
                        <div class="card-block">
                            <p>Before submitting please check on right sidebar if you have completed all question</p>
                            <p>If you think you are ready to get result then press submit button.</p>
                            <button type='submit' class='btn btn-success float-right'>Get Result</button>
                        </div>
                    </div>
            </form>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 ">
                <div class="card-header">Student Help Section</div>
                <div class="card-block">
                    <p>Time Remaining: <mark>120 Minutes</mark></p>
                    <p>Be Patient While Giving Exams</p>
                    <p>Don't cheat . Cheating here means cheating yourself</p>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">Statistics</div>
                <div class="card-block">
                    <table class='table table-bordered'>
                        <tr>
                            <td>Completed</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Incomplete</td>
                            <td>90</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">Question Completed</div>
                <div class="card-block">

                    <ul>
                        <li>Blue means done</li>
                        <li>White means not done</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('after-styles')
<style>
    table td{
        text-align:center;
    }
    .question_list_checkbox{
        margin-right:15px;
    }
</style>
@endsection

