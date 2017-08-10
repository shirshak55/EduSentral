<?php

namespace App\Http\Controllers\Api\Quiz;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Quiz\Board\BoardRepository;
use Illuminate\Http\Request;

class BoardsController extends Controller
{
    private $boards;

    public function __construct(BoardRepository $boards)
    {
        $this->boards = $boards;
    }

    public function index()
    {
        return $this->boards->getAllBoardsApi();
    }
}
