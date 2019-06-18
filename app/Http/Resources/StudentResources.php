<?php

namespace App\Http\Resources;

use App\Classroom;
use App\Guardian;
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
        $guardian_data= $this->guardian;
        //$guardian_data= $this->guardian_data;
//        return $guardian_data;
        return [
            "username"=>$this->user->username,
            "identity_number"=>$this->user->identity_number,
            "dob"=>$this->user->dob,
            "mobile_number"=>$this->user->phone_number,
            "notes"=>$this->user->notes,
            "name"=>$this->user->name,
            "guardian_name"=>$guardian_data->name,
            "guardian_mobile_number"=>$guardian_data->phone_number,
            "guardian_identity_number"=>$guardian_data->identity_number,
//            "classroom"=>Classroom::where('id',$this->class_student->classroom_id)->get()->first()->name,
            //"classroom"=>$this->class_student()->orderBy('updated_at','desc')->first()//->classroom_id,
            "classroom"=>($this->class_student->first()?Classroom::findOrFail($this->class_student()->orderBy('updated_at','desc')->first()->classroom_id)->name: null)//->classroom_id,
        ];
    }
}
