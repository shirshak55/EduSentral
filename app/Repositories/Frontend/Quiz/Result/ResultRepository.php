<?php

namespace App\Repositories\Frontend\Quiz\Result;

use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;

/**
 * Class ResultRepository.
 */
class ResultRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = User::class;


}
