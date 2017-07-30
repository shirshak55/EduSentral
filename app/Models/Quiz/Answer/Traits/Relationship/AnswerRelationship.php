<?php

namespace App\Models\Quiz\Answer\Traits\Relationship;

use App\Models\Quiz\Answer\CorrectAnswer;

trait AnswerRelationship
{

    public function correct_answers()
    {
        return $this->hasMany(CorrectAnswer::class,'answer_id','id');
    }
}