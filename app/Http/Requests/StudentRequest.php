<?php

namespace App\Http\Requests;

class StudentRequest extends BaseRequest
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
            //"username"=>'required|unique:users'.($this->id ? ",id,$this->user->id" : ''),
            //"email"=>'required|unique:users'.($this->id ? ",id,$this->user->id" : ''),
            "password"=>'sometimes',
            "identity_number"=>'required|unique:users'.($this->id ? ",id,$this->user->id" : ''),
            "notes"=>'required',
            "dob"=>'required',
            "guardian_data"=>'required'

        ];
    }
}
