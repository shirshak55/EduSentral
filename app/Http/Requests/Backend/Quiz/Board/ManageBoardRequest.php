<?php

namespace App\Http\Requests\Backend\Quiz\Board;

use App\Http\Requests\Request;


/**
 * Class ManageBoardRequest.
 */
class ManageBoardRequest extends Request
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
            //
        ];
    }
}
