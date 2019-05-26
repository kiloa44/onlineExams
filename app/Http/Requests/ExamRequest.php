<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>'required',
            "description"=>'sometimes',
            'begin_at'=>'required',
            'end_at'=>'required',
            'class_subject_id'=>"required"
        ];
    }
}
