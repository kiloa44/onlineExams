<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *. ($this->id ? ",id,$this->user->id" : ''),
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>'required',
            "username"=>'required|unique:users,id',
            "email"=>"required|unique:users,id",
            "password"=>'sometimes',
            "phone_number"=>'numeric|required|unique:users,phone_number',
            "identity_number"=>'numeric|required|unique:users,identity_number',
            "dob"=>'numeric|sometimes'

        ];
    }
}
