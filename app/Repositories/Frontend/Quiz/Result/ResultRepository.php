<?php

namespace App\Repositories\Frontend\Quiz\Result;

use App\Exceptions\GeneralException;
use App\Models\Quiz\Result\Result;
use App\Repositories\BaseRepository;
use App\Repositories\Frontend\Quiz\Answer\CorrectAnswerRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class ResultRepository.
 */
class ResultRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Result::class;

    protected $correct_answers;

    public function __construct(CorrectAnswerRepository $correct_answers)
    {
        $this->correct_answers = $correct_answers;
    }

    public function create(Model $user,Model $set,$input)
    {
        $correct_answer_repository = $this->correct_answers->getAllCorrectAnswers($set);
        $user_answers = array_map(function($answer){ return array_keys($answer); },$input['answers']);

        $incorrect_questions = [];
        foreach($correct_answer_repository as $question_id => $answers){
            if (! array_key_exists($question_id, $user_answers)){
                $incorrect_questions[] = $question_id;
                continue;
            }
            if(! is_array($user_answers[$question_id])){
                $user_answers[$question_id]=[];
            }
            if(! ($answers == $user_answers[$question_id] ) ){
                $incorrect_questions[] = $question_id;
            }
        }
        $result = new Result;
        $result->user()->associate($user);
        $result->percentage = (count($user_answers)-count($incorrect_questions)) / count($user_answers) * 100;
        $result->incorrect_questions = $incorrect_questions;
        $result->exam_data = $user_answers;


        if($resultModel = $set->results()->save($result))
            return $resultModel;

        throw new GeneralException('Sorry There is problem while displaying result.');
    }
}
