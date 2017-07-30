<?php

namespace App\Http\Controllers\Backend\Quiz\Rule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Quiz\Rule\ManageRuleRequest;
use App\Http\Requests\Backend\Quiz\Rule\StoreRuleRequest;
use App\Models\Quiz\Rule\Rule;
use App\Repositories\Backend\Quiz\Rule\RuleRepository;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    /**
     * @var Rules Repository
     */
    protected $rules;


    /**
     * @param RuleRepository $rules
     */
    public function __construct(RuleRepository $rules)
    {
        $this->rules = $rules;
    }

    public function index(ManageRuleRequest $request)
    {
        return view('backend.quiz.rules.index');
    }


    public function create()
    {
        return view('backend.quiz.rules.create');
    }


    public function store(StoreRuleRequest $request)
    {
        $this->rules->create($request->only(['name','content']));
        return redirect()->route('admin.quiz.rules.index')->withFlashSuccess(trans('alerts.backend.quiz.rules.created'));
    }


    public function edit(ManageRuleRequest $request, Rule $rule)
    {
        return view('backend.quiz.rules.edit')
                    ->withRule($rule);
    }

    public function update(StoreRuleRequest $request, Rule $rule)
    {
        $this->rules->update($rule,$request->only(['name','content']));

        return redirect()->route('admin.quiz.rules.index')->withFlashSuccess(trans('alerts.backend.quiz.rules.updated'));
    }


    public function destroy(ManageRuleRequest $request, Rule $rule)
    {
        $this->rules->delete($rule);

        return redirect()->route('admin.quiz.rules.index')->withFlashSuccess(trans('alerts.backend.quiz.rules.deleted'));
    }
}
