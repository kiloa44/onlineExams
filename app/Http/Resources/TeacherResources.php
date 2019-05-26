<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TeacherResources extends Resource
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
        $result = new UserResources($this->user);
        array_add($result,"subjects",TeacherSubjectResources::collection($this->teacher_subject));
        return $result;
    }
}
