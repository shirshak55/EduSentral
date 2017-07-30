<?php

namespace App\Models\Quiz\Question\Traits\Relationship;

use App\Models\Quiz\Answer\Answer;
use App\Models\Quiz\Answer\CorrectAnswer;
use App\Models\Quiz\Set\Set;

trait QuestionRelationship
{
    public function set()
    {
        return $this->morphTo(Set::class);
    }

    public function subject()
    {
        return $this->morphTo(Subject::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id','id');
    }

    public function correct_answers()
    {
        return $this->hasMany(CorrectAnswer::class,'question_id','id');
    }
}