<?php

namespace App\Models\Quiz\Set;

use App\Models\Quiz\Set\Traits\Attribute\SetAttribute;
use App\Models\Quiz\Set\Traits\Relationship\SetRelationship;
use App\Models\Quiz\Set\Traits\Scope\SetScope;
use App\Models\Quiz\Set\Traits\SetAccess;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Set extends Model
{
    use SetAttribute,
        SetRelationship,
        SetScope,
        SetAccess,
        HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
                ->generateSlugsFrom('name')
                ->saveSlugsTo('slug')
                ->usingSeparator('-')
                ->slugsShouldBeNoLongerThan(50);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
