<?php

namespace App\Models\Quiz\Board;

use App\Models\Quiz\Board\Traits\Attribute\BoardAttribute;
use App\Models\Quiz\Board\Traits\Relationship\BoardRelationship;
use App\Models\Quiz\Board\Traits\Scope\BoardScope;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use BoardAttribute,
        BoardRelationship,
        BoardScope;
}
