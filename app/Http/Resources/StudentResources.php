<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class StudentResources extends Resource
{


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //$guardian_data= json_decode($this->guardian_data);
        $guardian_data= $this->guardian_data;
        return $guardian_data;
        return [
            "username"=>$this->user->username,
            "identity_number"=>$this->user->identity_number,
            "dob"=>$this->user->dob,
            "mobile_number"=>$this->user->phone_number,
            "notes"=>$this->user->notes,
            "name"=>$this->user->name,
            "guardian_name"=>$guardian_data->guardian_name,
            "guardian_mobile_number"=>$guardian_data->guardian_mobile_number,
            "guardian_identity_number"=>$guardian_data->guardian_identity_number,
            //'classroom'=>$this->class_student->classroom,
        ];
    }
}
