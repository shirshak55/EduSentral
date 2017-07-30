<?php

namespace App\Models\Quiz\Board\Traits\Relationship;

use App\Models\Quiz\Track\Track;

trait BoardRelationship
{

    public function sets()
    {
        $this->hasMany(QuestionSet::class,'board_id','id');
    }

    public function subjects()
    {
        $this->belongsToMany(Subject::class,'board_subjects','board_id','subject_id');
    }


}