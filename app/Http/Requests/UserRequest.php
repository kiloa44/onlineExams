<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *. ($this->id ? ",id,$this->user->id" : ''),
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>'required',
            "username"=>'sometimes|unique:users,id',
            "email"=>"required|unique:users,id",
            "password"=>'sometimes',
            "phone_number"=>'numeric|required|unique:users,phone_number',
            "address"=>'sometimes',
            "identity_number"=>'numeric|required|unique:users,identity_number',
            "dob"=>'numeric|sometimes'

        ];
    }
}
