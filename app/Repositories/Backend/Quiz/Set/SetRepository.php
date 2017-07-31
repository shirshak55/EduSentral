<?php

namespace App\Repositories\Backend\Quiz\Set;

use App\Exceptions\GeneralException;
use Illuminate\Support\Facades\DB;
use App\Models\Quiz\Board\Board;
use App\Models\Quiz\Rule\Rule;
use App\Models\Quiz\Set\Set;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class SetRepository extends BaseRepository
{
    const MODEL= Set::Class;

    public function getAll($order_by = 'name', $sort = 'asc')
    {
        return $this->query($order_by = 'year', $sort = 'asc')
            ->orderBy($order_by, $sort)
            ->get();
    }

    public function getForDataTable($order_by = 'year', $sort = 'asc')
    {
        return $this->query()
                    ->select([
                        'sets.id',
                        'sets.name',
                        'sets.year',
                        'sets.created_at',
                        'sets.updated_at'
                    ])
                    ->orderBy($order_by, $sort);
    }

    public function create(array $input)
    {
        DB::transaction(function () use ($input) {
            $board = Board::find($input['board']);
            $rule = Rule::find($input['rule']);

            $set = self::MODEL;
            $set = new $set();

            $set->name = $input['name'];
            $set->year = $input['year'];

            $set->rule()->associate($rule);
            $set->board()->associate($board);

            $questions = $input['question'];
            $answers = $input['answer'];
            $correct_answers = $input['correct_answer'];

            if( $set->save() ){
                $set->createQuestionsAndAnswers($set->getKey(),$questions,$answers,$correct_answers);
                return true;
            };

            throw new GeneralException(trans('exceptions.backend.quiz.sets.create_error'));
        });

    }

    public function update(Model $set,array $input)
    {
        $set->name = $input['name'];
        $set->year  = $input['year'];

        DB::transaction(function () use ($set,$input) {
            $board = Board::find($input['board']);
            $rule = Rule::find($input['rule']);


            $set->name = $input['name'];
            $set->year = $input['year'];

            $set->rule()->associate($rule);
            $set->board()->associate($board);

            $questions = $input['question'];
            $answers = $input['answer'];
            $correct_answers = $input['correct_answer'];

            if( $set->save() ){
                $set->questions()->delete();
                $set->createQuestionsAndAnswers($set->getKey(),$questions,$answers,$correct_answers);
                return true;
            };

            throw new GeneralException(trans('exceptions.backend.quiz.sets.create_error'));
        });
    }

    public function delete(Model $set)
    {
        if($set->delete())
        {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.quiz.sets.delete_error'));
    }
}