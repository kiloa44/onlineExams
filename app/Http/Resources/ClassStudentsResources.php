<?php

namespace App\Http\Resources;

use App\Classroom;
use App\Student;
use Illuminate\Http\Resources\Json\Resource;

class ClassStudentsResources extends Resource
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

        $whoWants = ($this->student)?new StudentResources($this->student):new ClassroomResources($this->classroom);

        return $whoWants;



//        return[
//            "students"=>StudentResources::collection($this->student),
//            "classrooms"=>ClassroomResources::collection($this->classroom)
//        ];
    }
}
