<?php

namespace App\Models\Quiz\Set\Traits\Relationship;

use App\Models\Quiz\Board\Board;
use App\Models\Quiz\Question\Question;
use App\Models\Quiz\Rule\Rule;
use App\Models\Quiz\Track\Track;

trait SetRelationship
{
    public function questions()
    {
        return $this->morphMany(Question::class,'questionable');
    }

    public function board()
    {
        return $this->belongsTo(Board::class,'board_id','id');
    }
    public function rule()
    {
        return $this->belongsTo(Rule::class,'rule_id','id');
    }
}