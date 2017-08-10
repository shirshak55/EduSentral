<?php

namespace App\Http\Controllers\Api\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz\Board\Board;
use App\Models\Quiz\Set\Set;
use App\Repositories\Frontend\Quiz\Set\SetRepository;
use Illuminate\Http\Request;

class SetsController extends Controller
{
    private $sets;

    public function __construct(SetRepository $sets)
    {
        $this->sets = $sets;
    }

    public function index(Board $board)
    {
        return $this->sets->getAllApi($board);
    }

    public function show(Set $set)
    {
        return $this->sets->getForApi($set);
    }
}
