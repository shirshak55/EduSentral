<?php

namespace App\Http\Controllers\Backend\Quiz\Board;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Quiz\Board\ManageBoardRequest;
use App\Http\Requests\Backend\Quiz\Board\StoreBoardRequest;
use App\Http\Requests\Backend\Quiz\Board\UpdateBoardRequest;
use App\Models\Quiz\Board\Board;
use App\Repositories\Backend\Quiz\Board\BoardRepository;
use Illuminate\Http\Request;

class BoardsController extends Controller
{
    protected $boards;


    public function __construct(BoardRepository $board)
    {
        $this->boards = $board;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ManageBoardRequest $request)
    {
        return view('backend.quiz.boards.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ManageBoardRequest $request)
    {
        return view('backend.quiz.boards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoardRequest $request)
    {
        $this->boards->create($request->only(['name','description','image','location']));

        return redirect()->route('admin.quiz.boards.index')->withFlashSuccess(trans('alerts.backend.quiz.boards.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Board  $Board
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageBoardRequest $request,Board $board)
    {
        return view('backend.quiz.boards.edit',compact('board'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Board  $Board
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoardRequest $request, Board $board)
    {
        $this->boards->update($board,$request->only(['name','description','image','location']));

        return redirect()->route('admin.quiz.boards.index')->withFlashSuccess(trans('alerts.backend.quiz.boards.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Board  $board
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageBoardRequest $request,Board $board)
    {
        $this->boards->delete($board);

        return redirect()->route('admin.quiz.boards.index')->withFlashSuccess(trans('alerts.backend.quiz.boards.deleted'));
    }
}
