<?php

namespace App\Models\Quiz\Rule;

use App\Models\Quiz\Rule\Traits\Attribute\RuleAttribute;
use App\Models\Quiz\Rule\Traits\Relationship\RuleRelationship;
use App\Models\Quiz\Rule\Traits\Scope\RuleScope;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use RuleAttribute,
        RuleRelationship,
        RuleScope;
}
