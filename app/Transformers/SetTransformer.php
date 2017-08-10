<?php

namespace App\Transformers;

use App\Models\Quiz\Set\Set;
use App\Transformers\QuestionTransformer;
use League\Fractal\TransformerAbstract;

class SetTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'rule',
        'board',
        'questions',
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Set $set)
    {
        return [
            'name'                => $set->name,
            'year'                => $set->year,
            'slug'                => $set->slug,
            'updated_at'          => $set->updated_at,
            'updated_at_friendly' => $set->updated_at->diffForHumans(),
        ];
    }

    public function includeRule(Set $set)
    {
        $rule = $set->rule;

        return $this->item($rule,new RuleTransformer);
    }

    public function includeBoard(Set $set)
    {
        $boards = $set->board;

        return $this->item($boards, new BoardTransformer);
    }

    public function includeQuestions(Set $set)
    {
        $questions = $set->questions;

        return $this->collection($questions,new QuestionTransformer);
    }
}
