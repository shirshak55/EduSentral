@extends('frontend.layouts.app')

@section('title',  'All Sets Of '. $result->resultable->name .' | '.app_name())

@section('content')
    <div class="jumbotron">
        <h1>{{ $result->resultable->name }} Result Summary:</h1>
        <div class="table-responsive">
            <table class='table table-bordered'>
                <tr class='table-warning'>
                    <td>Set Name</td>
                    <td>{{ $result->resultable->name }}</td>
                </tr>

                <tr class='table-danger'>
                    <td>Year</td>
                    <td>{{ $result->resultable->year }}</td>
                </tr>

                <tr class='table-info'>
                    <td>Board</td>
                    <td>{{ $result->resultable->board->name }}</td>
                </tr>

                <tr class='table-success'>
                    <td>Obtained Marks</td>
                    <td>{{ $result->resultable->questions->sum('marks') }}</td>
                </tr>

                <tr class='table-danger'>
                    <td>Total Number of Questions</td>
                    <td>{{ $result->resultable->questions->count() }}</td>
                </tr>

                <tr class='table-danger'>
                    <td>Percentage</td>
                    <td>${{ $result->percentage }}\%$</td>
                </tr>

            </table>
            <p>We want you to learn from <mark>mistakes</mark>. See below for the correct questions and their respective correct answer.</p>
            <p><mark>Green</mark> in answers means it is correct answer.</p>
            <p><mark>Cross</mark> (<span class='badge badge-danger'><i class="fa fa-times" aria-hidden="true"></i></span>) in answers means it is the answer you select during exam.</p>
        </div>
    </div>

    <blockquote>Incorrect Question List:</blockquote>

        @forelse($result->incorrect_questions()->chunk(2) as $questions)
            <div class="row">
                @foreach($questions as $question)
                    <div class="col-md-6 mb-4">
                        <div class="card mb-6">
                            <div class="card-header">Question Number {{ $question->sort }}</div>
                            <div class="card-block">
                                <p class='card-text'>{!! $question->content !!}</p>
                                <ul class='list-group'>
                                    @foreach($question->answers as $answer)
                                        <li class='list-group-item  justify-content-between {{ $question->correct_answers->contains('answer_id',$answer->id) ? 'list-group-item-success':'' }}' >
                                            {{ $answer->content }}
                                            @if(isset($result->exam_data[$question->id]) && in_array($answer->id,$result->exam_data[$question->id]))
                                                <span class='badge badge-danger'><i class="fa fa-times" aria-hidden="true"></i></span>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @empty
            <blockquote>Wow! Every question you solved were correct! Keep it up.</blockquote>
        @endforelse

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

@section('after-scripts')
<script type="text/javascript" async
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
</script>
@endsection