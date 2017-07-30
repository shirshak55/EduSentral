<?php

namespace App\Http\Controllers\Backend\Quiz\Set;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Quiz\Set\ManageSetRequest;
use App\Http\Requests\Backend\Quiz\Set\StoreSetRequest;
use App\Http\Requests\Backend\Quiz\Set\UpdateSetRequest;
use App\Models\Quiz\Set\Set;
use App\Repositories\Backend\Quiz\Board\BoardRepository;
use App\Repositories\Backend\Quiz\Rule\RuleRepository;
use App\Repositories\Backend\Quiz\Set\SetRepository;



class SetsController extends Controller
{
    protected $sets;
    protected $boards;
    protected $rules;

    public function __construct(SetRepository $sets,BoardRepository $boards,RuleRepository $rules)
    {
        $this->sets = $sets;
        $this->boards = $boards;
        $this->rules = $rules;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ManageSetRequest $request)
    {
        return view('backend.quiz.sets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ManageSetRequest $request)
    {
        return view('backend.quiz.sets.create')
                    ->withRules($this->rules->getAll())
                    ->withBoards($this->boards->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSetRequest $request)
    {
        $this->sets->create($request->only(['name','year','board','rule','question','answer','correct_answer']));
        return redirect()->route('admin.quiz.sets.index')->withFlashSuccess(trans('alerts.backend.quiz.sets.created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Set $set
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageSetRequest $request,Set $set)
    {
        return view('backend.quiz.sets.edit')
                    ->withSet($set)
                    ->withRules($this->rules->getAll())
                    ->withBoards($this->boards->getAll())
                    ->withQuestions($set->questions)
                    ->withSetRule($set->rule)
                    ->withSetBoard($set->board);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Set $set
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSetRequest $request, Set $set)
    {
        $this->sets->update($set,$request->only(['name','year','board','rule','question','answer','correct_answer']));
        return redirect()->route('admin.quiz.sets.index')->withFlashSuccess(trans('alerts.backend.quiz.sets.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Set $set
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageSetRequest $request,Set $set)
    {
        $this->sets->delete($set);
        return redirect()->route('admin.quiz.sets.index')->withFlashSuccess(trans('alerts.backend.quiz.sets.deleted'));
    }
}
