<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class QuestionResources extends Resource
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
            'text'=>$this->text,
            'is_correct'=>$this->is_correct,
            'correct_answer'=>$this->correct_answer,
            'type'=>$this->type,
            'choices'=>$this->choices,
            //'exams'=>ExamQuestionResources::collection($this->exam_question)
        ];
    }
}
