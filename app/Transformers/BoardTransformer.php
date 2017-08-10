<?php

namespace App\Transformers;

use App\Models\Quiz\Board\Board;
use League\Fractal\TransformerAbstract;

class BoardTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Board $board)
    {
        return [
            'name'        => $board->name,
            'description' => $board->description,
            'location'    => $board->location,
            'image'       => $board->image,
            'slug'        => $board->slug,
        ];
    }
}
