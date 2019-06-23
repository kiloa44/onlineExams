<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "text"=>'required',
            'is_correct'=>'sometimes',
            "correct_answer"=>'required',
            "type"=>'required',
            "choices"=>'required',
            "class_subject_id"=>'sometimes',

        ];
    }
}
