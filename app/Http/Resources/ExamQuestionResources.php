<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ExamQuestionResources extends Resource
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
        $wanted = ($this->exam)?$this->question:$this->exam;
        return $wanted;
    }
}
