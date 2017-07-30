<?php

namespace App\Repositories\Backend\Quiz\Rule;

use App\Exceptions\GeneralException;
use App\Models\Quiz\Rule\Rule;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;


/**
 * Class RuleRepository.
 */
class RuleRepository extends BaseRepository
{
	/**
     * Associated Repository Model.
     */
    const MODEL = Rule::class;

    public function getAll($order_by = 'name', $sort = 'asc')
    {
        return $this->query()
            ->orderBy($order_by, $sort)
            ->get();
    }

    /**
     * @return mixed
     */
    public function getForDataTable($order_by = 'name', $sort = 'asc')
    {
        return $this->query()
            ->select([
                'rules.id',
                'rules.name',
                'rules.created_at',
                'rules.updated_at',
            ])
            ->orderBy($order_by, $sort)
            ->get();
    }

    /**
     * Creates Rule
     * @param  array  $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
    	if($this->query()->where('name',$input['name'])->first()){
    		throw new GeneralException(trans('exceptions.backend.quiz.rules.already_exists'));
    	}

		$rule = self::MODEL;
		$rule = new $rule();
		$rule->name = $input['name'];
		$rule->content = $input['content'];

		if($rule->save()){
			return true;
		}

		throw new GeneralException(trans('exceptions.backend.quiz.rules.create_error'));

    }

    /**
     * Update Rule
     * @param array $input
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function update(Model $rule,array $input)
    {
    	$rule->name = $input['name'];
    	$rule->content = $input['content'];

    	if($rule->save()){
    		return true;
    	}

    	throw new GeneralException(trans('exceptions.backend.quiz.rules.update_error'));
    }

    /**
     * Delete rule
     * @param  Model  $rule
     * @return bool
     */
    public function delete(Model $rule){

    	if($rule->delete())
    	{
    		return true;
    	}
    	throw new GeneralException(trans('exceptions.backend.quiz.rules.delete_error'));
    }
}