@extends('frontend.layouts.app')

@section('title',  'Boards | '.app_name())

@section('content')
<div class="jumbotron">
    <h1>Boards</h1>
    <p>Pick your corresponding institutions or boards and quickly give examination. Success is in your hands.</p>
</div>

    @foreach($boards->chunk(2) as $boardSet)
        <div class="row">
        @foreach($boardSet as $board)
            <div class="col-sm-6">
                <div class="card text-center mb-3">
                    <div class="card-header ">
                     {{ $board->name }}
                    </div>
                    <img src="{{ $board->image_link }}" alt="{{ $board->description }}">
                    <div class="card-block">
                        <h4 class="card-title">{{ $board->name }}</h4>
                        <p class="card-text">{{ $board->description }}</p>
                    </div>
                    <div class="card-block">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('frontend.quiz.board.sets',$board) }}" class='btn btn-primary'>Question Set</a>
                            <a href="" class='btn btn-success'>Subjects</a>
                            <a href="" class='btn btn-warning'>Materials</a>
                        </div>
                    </div>
                 </div>
            </div>
            @endforeach
        </div>
    @endforeach

@endsection