<?php

namespace App\Models\Quiz\Result;

use App\Models\Quiz\Result\Traits\Attribute\ResultAttribute;
use App\Models\Quiz\Result\Traits\Relationship\ResultRelationship;
use App\Models\Quiz\Result\Traits\Scope\ResultScope;
use App\Models\Uuids;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public $incrementing = false;

    use ResultAttribute,
        ResultRelationship,
        ResultScope,
        Uuids;

    protected $casts = [
        'incorrect_questions' => 'array',
        'exam_data'           => 'array',
    ];
}
