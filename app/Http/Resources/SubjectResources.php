<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class SubjectResources extends Resource
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
            'name'=>$this->name,
            'description'=>$this->description,
            'classrooms'=>ClassSubjectResources::collection($this->class_subject),
            'teacher'=>TeacherSubjectResources::collection($this->teacher_subject)
        ];
    }
}
