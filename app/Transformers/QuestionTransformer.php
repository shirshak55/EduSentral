<?php

namespace App\Transformers;

use App\Models\Quiz\Question\Question;
use App\Transformers\AnswerTransformer;
use App\Transformers\CorrectAnswerTransformer;
use League\Fractal\TransformerAbstract;

class QuestionTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        'answers',
        'correct_answers',
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

        foreach($question->answers as $index => $answer){
            if(isset($answer->correct_answers->first()->answer_id) && $answer->correct_answers->first()->answer_id == $answer->id){
                $answers->forget($index);
            }
        }
        return $this->collection($answers, new AnswerTransformer);
    }

    public function includeCorrectAnswers(Question $question)
    {
        $correct_answers = $question->correct_answers->first();
        return $this->item($correct_answers,new CorrectAnswerTransformer);
    }
}
