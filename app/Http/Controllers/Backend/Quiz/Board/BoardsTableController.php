<?php

namespace App\Http\Controllers\Backend\Quiz\Board;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Quiz\Board\ManageBoardRequest;
use App\Repositories\Backend\Quiz\Board\BoardRepository;
use Yajra\Datatables\Datatables;

class BoardsTableController extends Controller
{
    protected $boards;


    public function __construct(BoardRepository $board)
    {
        $this->boards = $board;
    }


    public function __invoke(ManageBoardRequest $request)
    {
        return Datatables::of($this->boards->getForDataTable())
                ->escapeColumns(['id','name','location','created_at','updated_at','slug'])
                ->addColumn('actions',function($board){
                    return $board->action_buttons;
                })
                ->make(true);
    }
}