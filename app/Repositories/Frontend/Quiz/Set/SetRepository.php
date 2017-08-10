<?php

namespace App\Repositories\Frontend\Quiz\Set;

use App\Exceptions\GeneralException;
use App\Models\Quiz\Board\Board;
use App\Models\Quiz\Set\Set;
use App\Repositories\BaseRepository;
use App\Transformers\SetTransformer;
use Illuminate\Support\Facades\DB;

/**
 * Class SetRepository.
 */
class SetRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Set::class;

    public function getAllSets($board)
    {
        return $board->sets;
    }

    public function getAllApi($board)
    {
        $sets = $board->sets;

        return fractal($sets, new SetTransformer)->toArray();
    }

    public function getForApi($set)
    {
        return fractal($set,new SetTransformer)
                ->parseIncludes(['questions'])
                ->toArray();
    }
}
