<?php

namespace App\Repositories\Frontend\Quiz\Set;

use App\Exceptions\GeneralException;
use App\Models\Quiz\Board\Board;
use App\Models\Quiz\Set\Set;
use App\Repositories\BaseRepository;
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
}
