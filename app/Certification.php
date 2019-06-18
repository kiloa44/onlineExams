<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Certification extends Model
{
    protected $fillable = ["student_id",'student_name','student_class','student_dob',"notes"];


    public function student(){
        return $this->hasOne('App\Student','id','student_id');
    }


    public function certification_subject(){
        return $this->hasMany('App\CertificationSubject');
    }




    use SoftDeletes;
    protected $dates=['deleted_at'];
}
