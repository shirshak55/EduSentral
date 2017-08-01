<?php

namespace App\Models\Quiz\Subject\Traits\Relationship;

use App\Models\Quiz\Question\Question;
use App\Models\Quiz\Result\Result;

trait SubjectRelationship
{
    public function questions()
    {
        return $this->morphMany(Question::class,'questionable');
    }

    public function results()
    {
        return $this->morphMany(Result::class,'resultable');
    }
}