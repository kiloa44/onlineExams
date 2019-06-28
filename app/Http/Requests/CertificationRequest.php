<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'student_identity_number'=>'numeric|required|unique:students,id',
            //"classroom"=>"required",
            'notes'=>'sometimes'
        ];
    }
}
