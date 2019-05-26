<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ExamResources extends Resource
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
            'subject_id'=>$this->subject_id,
            'name'=>$this->name,
            'description'=>$this->description,
            'begin_at'=>$this->begin_at,
            'end_at'=>$this->end_at,
            'mark'=>$this->mark,
            "questions"=>ExamQuestionResources::collection($this->exam_question)
        ];
    }
}
