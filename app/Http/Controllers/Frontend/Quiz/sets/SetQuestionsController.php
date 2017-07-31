<?php

namespace App\Http\Controllers\Frontend\Quiz\Sets;

use App\Http\Controllers\Controller;
use App\Models\Quiz\Set\Set;
use App\Repositories\Frontend\Quiz\Set\QuestionRepository;
use Illuminate\Http\Request;

class SetQuestionsController extends Controller
{
    private $questions;

    public function __construct(QuestionRepository $questions)
    {
        $this->questions = $questions;
    }

    public function index(Set $set)
    {
        $questions = $this->questions->getAllQuestions($set);
        return view('frontend.quiz.setquestions.index',compact('questions','set'));
    }
    public function showRules(Set $set)
    {
        $questions = $this->questions->getAllQuestions($set);
        return view('frontend.quiz.setrules.index',compact('questions','set'));
    }
}