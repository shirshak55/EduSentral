<?php

namespace App\Models\Quiz\Board;

use App\Models\Quiz\Board\Traits\Attribute\BoardAttribute;
use App\Models\Quiz\Board\Traits\Relationship\BoardRelationship;
use App\Models\Quiz\Board\Traits\Scope\BoardScope;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Board extends Model
{
    use BoardAttribute,
        BoardRelationship,
        BoardScope,
        HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
                ->generateSlugsFrom('name')
                ->saveSlugsTo('slug')
                ->usingSeperator('-')
                ->slugsShouldBeNoLongerThan(50)
                ->doNotGenerateSlugsOnUpdate();
    }

    public function getRouteKeyName()
    {
        return $this->slug;
    }
}
