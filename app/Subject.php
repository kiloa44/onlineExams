<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    protected $fillable=['name','description'];


    public function classrooms()
    {
        return $this->belongsToMany('App\Classroom','class_subjects')
            ->using('App\ClassSubject')
            ->withPivot("rate");
    }


    public function teachers()
    {
        return $this->belongsToMany('App\Teacher','teacher_subjects')
            ->using('App\TeacherSubject');
    }

    public function certifications(){
        return $this->belongsToMany('App\Certification','certification_subjects')
            ->using('App\CertificationSubject');
    }

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
    public function exams()
    {
        $this->hasMany('App\Exam');
    }




    use SoftDeletes;
    protected $dates=['deleted_at'];
}
