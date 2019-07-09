<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certification extends Model
{
    protected $fillable = ["student_id","notes"];
    protected $appends = ['student_name','student_class','student_dob'];

    public function student(){
        return $this->hasOne('App\Student','id','student_id');
    }


    public function subjects(){
        return $this->belongToMany('App\Subject','certification_subjects')
            ->using('App\CertificationSubject');
    }




    //Accessors
    public function getStudentNameAttribute(){
        $student = Student::where('id',$this->attributes['student_id'])->first();
        return $student->user->name;
    }

    public function getStudentDobAttribute(){
        $student = Student::where('id',$this->attributes['student_id'])->first();
        return $student->user->dob;
    }

    public function getStudentClassAttribute(){
        $student = Student::where('id',$this->attributes['student_id'])->first();
        return ($student->classrooms->first())?$student->classrooms->first()->name:null;
    }






    use SoftDeletes;
    protected $dates=['deleted_at'];
}
