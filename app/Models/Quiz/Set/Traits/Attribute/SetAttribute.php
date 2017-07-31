<?php

namespace App\Models\Quiz\Set\Traits\Attribute;

trait SetAttribute
{
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.quiz.sets.edit', $this).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'"></i></a> ';
    }

    public function getDeleteButtonAttribute()
    {
        return '<a href="'.route('admin.quiz.sets.destroy', $this).'"
                data-method="delete"
                data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
                data-trans-title="'.trans('strings.backend.general.are_you_sure').'"
                class="btn btn-xs btn-danger"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'"></i></a>';
    }

    public function getActionButtonsAttribute()
    {
        return $this->edit_button.$this->delete_button;
    }

    public function getDifficultyAttribute()
    {
        $easy     = ['very easy'=>$this->questions->sum('very easy')];
        $easy     = ['easy'=>$this->questions->sum('easy')];
        $moderate = ['moderate'=>$this->questions->sum('moderate')];
        $hard     = ['hard'=>$this->questions->sum('hard')];
        $hard     = ['very hard'=>$this->questions->sum('very hard')];

        return ucwords(array_keys($array, max($array))[0]);
    }
}