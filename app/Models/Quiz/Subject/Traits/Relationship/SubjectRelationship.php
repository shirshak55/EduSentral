<?php

namespace App\Models\Quiz\Subject\Traits\Relationship;

use App\Models\Quiz\Track\Track;

trait SubjectRelationship
{
    public function tracks()
    {
        return $this->morphMany(Track::class,'trackable');
    }
}