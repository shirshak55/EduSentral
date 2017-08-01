<?php

namespace App\Models\Quiz\Result;

use App\Models\Quiz\Result\Traits\Attribute\ResultAttribute;
use App\Models\Quiz\Result\Traits\Relationship\ResultRelationship;
use App\Models\Quiz\Result\Traits\Scope\ResultScope;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use ResultAttribute,
        ResultRelationship,
        ResultScope;

    protected $casts = [
        'incorrect_questions' => 'array',
        'exam_data'           => 'array',
    ];
}
