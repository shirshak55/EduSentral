<?php

namespace App\Repositories\Frontend\Quiz\Set;

use App\Exceptions\GeneralException;
use App\Models\Quiz\Question\Question;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class QuestionRepository.
 */
class QuestionRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Question::class;

}
