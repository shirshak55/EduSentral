<?php

namespace App\Models\Quiz\Subject\Traits\Attribute;

trait SubjectAttribute
{
    public function getEditButtonAttribute()
    {
        return '<a href="'.route('admin.quiz.subjects.edit', $this).'" class="btn btn-xs btn-primary"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.edit').'"></i></a> ';
    }

    public function getDeleteButtonAttribute()
    {
        return '<a href="'.route('admin.quiz.subjects.destroy', $this).'"
                data-method="delete"
                data-trans-button-cancel="'.trans('buttons.general.cancel').'"
                data-trans-button-confirm="'.trans('buttons.general.crud.delete').'"
                data-trans-title="'.trans('strings.backend.general.are_you_sure').'"
                class="btn btn-xs btn-danger"><i class="fa fa-times" data-toggle="tooltip" data-placement="top" title="'.trans('buttons.general.crud.delete').'"></i></a>';
    }

    public function getActionButtonsAttribute()
    {
        $this->edit_button.$this->delete_button;
    }
}