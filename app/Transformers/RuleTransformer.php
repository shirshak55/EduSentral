<?php

namespace App\Transformers;

use App\Models\Quiz\Rule\Rule;
use League\Fractal\TransformerAbstract;

class RuleTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Rule $rule)
    {
        return [
            'name'                => $rule->name,
            'content'             => $rule->content,
            'updated_at'          => $rule->updated_at,
            'updated_at_friendly' => $rule->updated_at->diffForHumans(),
        ];
    }
}
