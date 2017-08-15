<?php

namespace App\Models\Quiz\Question;

use App\Models\Quiz\Question\Traits\Attribute\QuestionAttribute;
use App\Models\Quiz\Question\Traits\Relationship\QuestionRelationship;
use App\Models\Quiz\Question\Traits\Scope\QuestionScope;
use App\Models\Quiz\Question\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use QuestionAttribute,
        QuestionRelationship,
        QuestionScope,
        Uuids;

    public $incrementing = false;


    protected $fillable = [
        'content',
        'marks',
        'time',
        'difficulty',
    ];

    protected $with = [
        'answers',
        'correct_answers',
    ];
}
