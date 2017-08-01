<?php

namespace App\Http\Controllers\Frontend\Quiz\Results;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Quiz\Result\StoreResultRequest;
use App\Models\Access\User\User;
use App\Models\Quiz\Result\Result;
use App\Models\Quiz\Set\Set;
use App\Repositories\Frontend\Quiz\Answer\CorrectAnswerRepository;
use App\Repositories\Frontend\Quiz\Result\ResultRepository;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    protected $correct_answers;
    protected $results;

    public function __construct(ResultRepository $results)
    {

        $this->results = $results;
    }

    public function store(StoreResultRequest $request,User $user,Set $set)
    {
        $result = $this->results->create($user,$set,$request->only('answers'));
        return redirect()->route('frontend.quiz.results.show',$result);
    }

    public function show(Result $result)
    {
        return view('frontend.quiz.results.show',compact('result'));
    }
}
