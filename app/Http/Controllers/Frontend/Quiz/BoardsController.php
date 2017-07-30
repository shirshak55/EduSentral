<?php

namespace App\Http\Controllers\Frontend\Quiz;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Quiz\Board\BoardRepository;
use Illuminate\Http\Request;

class BoardsController extends Controller
{
    protected $boards;

    public function __construct(BoardRepository $boards)
    {
        $this->boards = $boards;
    }

    public function index()
    {
        $boards = $this->boards->getAllBoards();
        return view('frontend.quiz.boards.index',compact('boards'));
    }
}
