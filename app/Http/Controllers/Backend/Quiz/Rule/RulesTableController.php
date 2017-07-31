<?php

namespace App\Http\Controllers\Backend\Quiz\Rule;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Quiz\Rule\ManageRuleRequest;
use App\Repositories\Backend\Quiz\Rule\RuleRepository;
use Yajra\Datatables\Facades\Datatables;

class RulesTableController extends Controller
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

    public function __invoke(ManageRuleRequest $request)
    {
        return Datatables::of($this->rules->getForDataTable())
        ->escapeColumns(['name', 'content','created_at','updated_at'])
        ->addColumn('actions', function ($rule) {
            return $rule->action_buttons;
        })
        ->make(true);
    }

}
