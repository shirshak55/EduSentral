<?php

namespace App\Repositories\Frontend\Quiz\Answer;

use App\Exceptions\GeneralException;
use App\Models\Quiz\Answer\CorrectAnswer;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class CorrectAnswerRepository.
 */
class CorrectAnswerRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = CorrectAnswer::class;

    public function getAllCorrectAnswers($set)
    {
        $correct_answers = $set->correct_answers->toArray();

        $data = [];

        foreach($correct_answers as $answer){
            $data[$answer['question_id']][] = $answer['answer_id'];
        }

        return $data;
    }
}
