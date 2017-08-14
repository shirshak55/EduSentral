<?php

namespace App\Transformers;

use App\Models\Quiz\Answer\CorrectAnswer;
use App\Models\Quiz\Answer\Answer;
use League\Fractal\TransformerAbstract;

class CorrectAnswerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(CorrectAnswer $correct_answers)
    {
        return [
            'content' => Answer::find($correct_answers->answer_id)->content,
        ];
    }
}
