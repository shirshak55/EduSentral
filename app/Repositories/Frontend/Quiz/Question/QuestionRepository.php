<?php

namespace App\Repositories\Frontend\Quiz\Question;

use App\Exceptions\GeneralException;
use App\Models\Quiz\Question\Question;
use App\Repositories\BaseRepository;
use App\Transformers\QuestionTransformer;
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

    public function getAllQuestions($set)
    {
        return $set->questions;
    }

    public function getAllQuestionsApi($set)
    {

        return fractal($set->questions,new QuestionTransformer())->toArray();
    }
}
