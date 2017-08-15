@extends('frontend.layouts.app')

@section('title',  'All Sets Of '. $board->name .' | '.app_name())

@section('content')
<div class="jumbotron">
    <h1>{{ $board->name }}</h1>
    <p>{{ $board->description }}</p>
</div>

<div class='table-responsive'>
    <table class='table table-bordered'>
        <tr>
            <th>#</th>
            <th>Set Name</th>
            <th>Set Year</th>
            <th>Total Questions</th>
            <th>Total Marks</th>
            <th>Time(Minutes)</th>
            <th>Action</th>
        </tr>
        <?php $i = 1 ?>
        @foreach($sets as $set)
            <tr class={{ ['table-success','table-info','table-warning','table-danger'][$i%4] }} >
                <td>{{ $i++ }}</td>
                <td>{{ $set->name }}</td>
                <td>{{ $set->year }}</td>
                <td>{{ $set->questions->count() }}</td>
                <td>{{ $set->questions->sum('marks') }}</td>
                <td>{{ $set->questions->sum('time') / 60 }}</td>
                <td><a href='{{ route('frontend.quiz.set.questions.rules',$set) }}' class='btn btn-primary' >Take this exam</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection