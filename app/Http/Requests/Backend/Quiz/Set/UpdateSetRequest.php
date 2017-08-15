<?php

namespace App\Http\Requests\Backend\Quiz\Set;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

class UpdateSetRequest extends Request
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
        return [
            'name' => 'required|max:191',
            'year' => 'required|integer',
            'board' => 'required|exists:boards,id',
            'rule'  => 'required|exists:rules,id',

            'question.*.difficulty' => 'required',
            'question.*.marks' => 'required|integer',
            'question.*.time' => 'required|integer',
            'question.*.content' => 'required',

            'answer.*.*'=>'required',
            'correct_answer.*.*'=>'required',

        ];
    }
}
