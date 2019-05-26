<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{
    protected $fillable = ['question_id','exam_id',"question_mark"];


    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    public function exam()
    {
        return $this->belongsTo('App\Exam');
    }


}
