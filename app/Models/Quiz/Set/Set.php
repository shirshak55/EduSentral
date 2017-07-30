<?php

namespace App\Models\Quiz\Set;

use App\Models\Quiz\Set\Traits\Attribute\SetAttribute;
use App\Models\Quiz\Set\Traits\Relationship\SetRelationship;
use App\Models\Quiz\Set\Traits\Scope\SetScope;
use App\Models\Quiz\Set\Traits\SetAccess;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use SetAttribute,
        SetRelationship,
        SetScope,
        SetAccess;
}
