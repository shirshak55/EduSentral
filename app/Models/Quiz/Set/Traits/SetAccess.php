<?php

namespace App\Models\Quiz\Set\Traits;

use App\Models\Quiz\Answer\Answer;
use App\Models\Quiz\Answer\CorrectAnswer;
use App\Models\Quiz\Question\Question;
use App\Models\Quiz\Set\Set;
use Carbon\Carbon;
use Uuid;

trait SetAccess
{
    public function saveQuestions($inputQuestions)
    {
        if(!empty($inputQuestions))
        {
            $this->questions()->sync($inputQuestions);
        }else{
            $this->questions()->detach($inputQuestions);
        }
    }

    public function attachQuestion($question)
    {
        if(is_object($question))
        {
            $question = $question->getKey();
        }

        if(is_array($question))
        {
            $question= $question['id'];
        }
        $this->questions()->attach($question);
    }

    public function detachQuestion($question)
    {
        if(is_object($question))
        {
            $question = $question->getKey();
        }

        if(is_array($question))
        {
            $question= $question['id'];
        }
        $this->questions()->detach($question);
    }

    public function attachQuestions($questions)
    {
        foreach ($questions as $question) {
            $this->attachQuestion($question);
        }
    }

    public function detachQuestions($permissions)
    {
        foreach($questions as $question){
            $this->detachQuestion($permission);
        }
    }

    public function createQuestionsAndAnswers($set_id,$questions,$answers,$correct_answers)
    {
        $now = Carbon::now();

        $i = 1;
        foreach($questions as $question_number=>$question){
            $questions[$question_number]['questionable_id']               = $set_id;
            $questions[$question_number]['sort']                           = $i;
            $questions[$question_number]['questionable_type']             = 'set';
            $questions[$question_number]['created_at'] = $now;
            $questions[$question_number]['updated_at'] = $now;
            $i++;
        }
        Question::insert($questions);

        $questionsCollection = Set::find($set_id)->questions->pluck('id');
        $tableAnswers = [];
        $j = 0;$j1=0;
        foreach($answers as $question_number=>$answerSet){
            $j2=0;
            foreach($answerSet as $answer_number => $answer){
                $tableAnswers[$j]['question_id'] = $questionsCollection->get($j1);
                $tableAnswers[$j]['content']     = $answer;
                $tableAnswers[$j]['sort']        = ++$j2;
                $tableAnswers[$j]['created_at']  = $now;
                $tableAnswers[$j]['updated_at']  = $now;
                $j++;
            }
            $j1++;
        }
        Answer::insert($tableAnswers);

        $answersCollection = Set::find($set_id)->questions->map->answers;

        $tableCorrectAnswers=[];
        $k= 0;$k1=0;
        if(count($correct_answers)){
            foreach($correct_answers as $question_number => $correct_answer_set){
                $question_number = $question_number-1;
                foreach($correct_answer_set as $correct_answer=>$uselessValue){
                    $tableCorrectAnswers[$k]['question_id'] = $questionsCollection->get($question_number);
                    $tableCorrectAnswers[$k]['answer_id']   = $answersCollection->get($question_number)->get($correct_answer-1)->id;
                    $tableCorrectAnswers[$k]['created_at']   = $now;
                    $tableCorrectAnswers[$k]['updated_at']   = $now;
                    $k++;
                }
            }
        }
        CorrectAnswer::insert($tableCorrectAnswers);
    }
}