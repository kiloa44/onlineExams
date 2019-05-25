<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    protected $fillable=['name','description','classroom_id','teacher_id'];

   public function exams()
   {
       $this->hasMany('App/Exam', 'subject_id', 'id');
   }
   public function calcolateRate(){

       $this->rate= $this->exams->avg('mark');
       return $this->rate;
   }

    public function class_subject()
    {
        return $this->hasMany('App\ClassSubject');
    }
    public function teacher_subject()
    {
        return $this->hasMany('App\TeacherSubject');
    }



    use SoftDeletes;
    protected $dates=['deleted_at'];
}
