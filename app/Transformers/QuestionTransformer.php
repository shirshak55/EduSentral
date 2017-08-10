<?php

namespace App\Transformers;

use App\Models\Quiz\Question\Question;
use App\Transformers\AnswerTransformer;
use League\Fractal\TransformerAbstract;

class QuestionTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        'answers',
    ];
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Question $question)
    {
        return [
            'id'         => $question->id,
            'content'    => $question->content,
            'difficulty' => $question->difficulty,
            'marks'      => $question->marks,
            'time'       => $question->time,
        ];
    }

    public function includeAnswers(Question $question)
    {
        $answers = $question->answers;

        return $this->collection($answers, new AnswerTransformer);
    }
}
