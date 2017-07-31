<?php

namespace App\Models\Quiz\Board\Traits\Relationship;

use App\Models\Quiz\Set\Set;
use App\Models\Quiz\Track\Track;

trait BoardRelationship
{

    public function sets()
    {
        return $this->hasMany(Set::class,'board_id','id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class,'board_subjects','board_id','subject_id');
    }


}