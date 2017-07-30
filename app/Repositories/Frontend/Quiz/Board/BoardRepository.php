<?php

namespace App\Repositories\Frontend\Quiz\Board;

use App\Exceptions\GeneralException;
use App\Models\Quiz\Board\Board;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class BoardRepository.
 */
class BoardRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Board::class;

    /**
     * Get All the Boards
     * @return Collection
     */
    public function getAllBoards()
    {
        return $this->query()->select('id','name','description','location','image','slug')->get();
    }
}
