<?php

namespace App\Repositories\Backend\Quiz\Board;

use App\Exceptions\GeneralException;
use App\Models\Quiz\Board\Board;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Image;


class BoardRepository extends BaseRepository
{

    const MODEL = Board::class;

    public function getAll($order_by = 'name', $sort = 'asc')
    {
        return $this->query()
                ->orderBy($order_by,$sort)
                ->get();
    }

    public function getForDataTable()
    {
        return $this->query()
                ->select([
                    'boards.id',
                    'boards.name',
                    'boards.location',
                    'boards.slug',
                    'boards.created_at',
                    'boards.updated_at',
                ]);
    }

    public function create(array $input)
    {
        if( $this->query()->where('name',$input['name'])->first() ){
            throw new GeneralException(trans('exception.backend.quiz.boards.already_exists'));
        }

        $board= self::MODEL;

        $board = new $board;

        $board_file_name = $this->saveImage($input['image'],$input['name']);

        $board->name = $input['name'];
        $board->description = $input['description'];
        $board->location = $input['location'];
        $board->image = $board_file_name;


        if($board->save()){
            return true;
        }

        throw new GeneralException(trans('exception.backend.quiz.boards.create_error'));
    }

    public function update(Model $board,$input)
    {
        $board_file_name = $this->saveImage($input['image'],$input['name']);

        $board->name = $input['name'];
        $board->description = $input['description'];
        $board->location = $input['location'];
        $board->image = $board_file_name;



        if($board->save())
        {
            return true;
        }

        throw new GeneralException(trans('exception.backend.quiz.boards.update_error'));
    }

    public function saveImage($image,$board_name)
    {
        $board_file_name = $board_name.'.'.$image->getClientOriginalExtension();

        Image::make($image)->resize(800, 300)->save( public_path('uploads'.DIRECTORY_SEPARATOR.'boards'.DIRECTORY_SEPARATOR. $board_file_name)  );

        return $board_file_name;
    }

    public function delete(Model $board)
    {
        if($board->delete()){
            return true;
        }

        throw new GeneralException(trans('exception.backend.quiz.boards.delete_error'));
    }

    public function getDefaultBoard()
    {
        return $this->query()->first();
    }
}