<?php

namespace App\Http\Controllers\Backend\Quiz\Set;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Quiz\Rule\ManageRuleRequest;
use App\Repositories\Backend\Quiz\Set\SetRepository;
use Yajra\Datatables\Facades\Datatables;

class SetsTableController extends Controller
{
    /**
     * @var Sets Repository
     */
    protected $sets;


    /**
     * @param SetRepository $sets
     */
    public function __construct(SetRepository $sets)
    {
        $this->sets = $sets;
    }

    public function invoke(ManageRuleRequest $request)
    {
        return Datatables::of($this->sets->getForDataTable())
        ->escapeColumns(['name', 'year','created_at','updated_at'])
        ->addColumn('actions', function ($set) {
            return $set->action_buttons;
        })
        ->make(true);
    }
}