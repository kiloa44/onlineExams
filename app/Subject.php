<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    protected $fillable=['name','description'];

   public function exams()
   {
       $this->hasMany('App\Exam', 'subject_id', 'id');
   }
    public function class_subject()
    {
        return $this->hasMany('App\ClassSubject');
    }

    public function teacher_subject()
    {
        return $this->hasMany('App\TeacherSubject');
    }

    public function certification_subject(){
        return $this->hasMany('App\CertificationSubject');
    }




    use SoftDeletes;
    protected $dates=['deleted_at'];
}
