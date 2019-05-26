<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TeacherSubjectResources extends Resource
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
        $wanted = ($this->teacher)?$this->subject:$this->teacher;
        return $wanted;
    }
}
