<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassSubject extends Model
{
    protected $fillable = ['subject_id','classroom_id'];

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
    public function questions(){
        return $this->hasMany('App\Question','class_subject_id','id');
    }
    public function exams(){
        return $this->belongsTo('App\Exam','class_subject_id','id');
    }

}
