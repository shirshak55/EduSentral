<?php

namespace App\Http\Controllers\Frontend\quiz\sets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SetQuestionsController extends Controller
{
    private $questions;

    public function __construct(QuestionRepository $questions)
    {
        $this->questions = $questions;
    }

    public function index($set)
    {
        return view('frontend.quiz.setquestions.index');
    }

}
