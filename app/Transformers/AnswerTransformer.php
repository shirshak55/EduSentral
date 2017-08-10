<?php

namespace App\Transformers;

use App\Models\Quiz\Answer\Answer;
use League\Fractal\TransformerAbstract;

class AnswerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Answer $answer)
    {
        return [
            'content' => $answer->content,
        ];
    }
}
