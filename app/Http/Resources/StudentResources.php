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
        return [ "username"=>$this->user->username,
            "name"=>$this->user->name,
            'classrooms'=>$this->class_student->classroom
        ];
    }
}
