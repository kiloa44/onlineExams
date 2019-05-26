<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ClassroomResources extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
            "name"=>$this->name,
            "description"=>$this->description,
            "students"=>ClassStudentsResources::collection($this->class_student),
            "subjects"=>ClassSubjectResources::collection($this->class_subject)
        ];
    }
}
