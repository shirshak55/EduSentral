<?php

namespace App\Http\Requests\Backend\Quiz\Rule;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;
use App\Models\Quiz\Rule\Rule as RuleModel;


class UpdateRuleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->hasRole('executive');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = RuleModel::where('name',$this->name)->first();
        return [
            'name' => ['required','max:191',Rule::unique('rules')->ignore($rule->id)],
            'content' => 'required',
        ];
    }
}
