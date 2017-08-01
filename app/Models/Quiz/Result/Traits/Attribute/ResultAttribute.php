<?php

namespace App\Models\Quiz\Result\Traits\Attribute;

use App\Models\Quiz\Question\Question;

trait ResultAttribute
{
    public function getTopperAttribute()
    {
        return;
    }

    public function getAverageMarkAttribute()
    {
        return;
    }

    public function getAverageCorrectQuestionsAttribute()
    {
        return;
    }

    public function getAverageIncorrectQuestionsAttribute()
    {
        return;
    }
    public function incorrect_questions()
    {
        return Question::find($this->incorrect_questions);
    }
}