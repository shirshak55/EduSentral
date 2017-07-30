<?php

namespace App\Models\Quiz\Track;

use Illuminate\Database\Eloquent\Model;
use Models\Quiz\Track\Traits\Attribute\TrackAttribute;
use Models\Quiz\Track\Traits\Relationship\TrackRelationship;
use Models\Quiz\Track\Traits\Scope\TrackScope;

class Track extends Model
{
    use TrackAttribute,
        TrackRelationship,
        TrackScope;
}
