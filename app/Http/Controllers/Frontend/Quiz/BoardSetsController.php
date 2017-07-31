<?php

namespace App\Http\Controllers\Frontend\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz\Board\Board;
use App\Repositories\Frontend\Quiz\Set\SetRepository;
use Illuminate\Http\Request;

class BoardSetsController extends Controller
{
    private $set;

    public function __construct(SetRepository $set)
    {
        $this->set = $set;
    }


    public function index(Board $board)
    {
        $sets = $this->set->getAllSets($board);
        return view('frontend.quiz.boardsets.index',compact('board','sets'));
    }
}
