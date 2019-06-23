<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certification extends Model
{
    protected $fillable = ["student_id",'student_class',"notes"];
    protected $appends = ['student_name','student_dob'];

    public function student(){
        return $this->hasOne('App\Student','id','student_id');
    }


    public function certification_subject(){
        return $this->hasMany('App\CertificationSubject');
    }

    public function getStudentNameAttribute(){
//        return $this->attributes['student_id'];
        $student = Student::where('id',$this->attributes['student_id'])->first();
        return $student->user->name;
    }

    public function getStudentDobAttribute(){
        $student = Student::where('id',$this->attributes['student_id'])->first();
        return $student->user->dob;
    }





    use SoftDeletes;
    protected $dates=['deleted_at'];
}
