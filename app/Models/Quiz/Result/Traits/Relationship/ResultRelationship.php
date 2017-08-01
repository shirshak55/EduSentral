<?php

namespace App\Models\Quiz\Result\Traits\Relationship;

use App\Models\Access\User\User;
use App\Models\Quiz\Set\Set;
use App\Models\Quiz\Subject\Subject;

trait ResultRelationship
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function resultable()
    {
        return $this->morphTo();
    }
}