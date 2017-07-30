<?php

namespace App\Http\Requests\Backend\Quiz\Board;

use App\Http\Requests\Request;
use App\Models\Quiz\Board\Board;
use Illuminate\Validation\Rule;


/**
 * Class UpdateBoardRequest.
 */
class UpdateBoardRequest extends Request
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
        $board = Board::where('name',$this->name)->first();
        return [
            'name' => ['required', 'max:191', Rule::unique('boards','name')->ignore($board->id)],
            'description'=>['required'],
            'location'=>['required'],
            'image'=>['required','mimes:png,jpeg,gif'],
        ];
    }
}
