<?php

namespace App\Models\Quiz\Track\Traits\Relationship;

use App\Models\Quiz\Board\Board;

trait TrackRelationship
{
    public function trackable()
    {
        $this->morphTo();
    }

    public function board()
    {
        return $this->hasOne(Board::class,'board_id','id');
    }

    public function rule()
    {
        return $this->hasOne(Rule::class,'rule_id','id');
    }

}