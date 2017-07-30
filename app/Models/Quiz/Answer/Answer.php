<?php

namespace App\Models\Quiz\Answer;

use App\Models\Quiz\Answer\Traits\Attribute\AnswerAttribute;
use App\Models\Quiz\Answer\Traits\Relationship\AnswerRelationship;
use App\Models\Quiz\Answer\Traits\Scope\AnswerScope;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use AnswerAttribute,
        AnswerRelationship,
        AnswerScope;
}
