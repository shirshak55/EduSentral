<?php

namespace App\Models\Quiz\Subject;

use App\Models\Quiz\Subject\Traits\Attribute\SubjectAttribute;
use App\Models\Quiz\Subject\Traits\Relationship\SubjectRelationship;
use App\Models\Quiz\Subject\Traits\Scope\SubjectScope;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use SubjectAttribute,
        SubjectRelationship,
        SubjectScope;
}
