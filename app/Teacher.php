<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    protected $fillable=['user_id','status'];

    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }
    public function classroom(){
        return $this->hasOne('App\Classroom','teacher_id','id');
    }
    public function subjects()
    {
        return $this->belongsToMany('App\Subject','teacher_subjects')
            ->using('App\TeacherSubject');
    }


    use SoftDeletes;
    protected $dates=['deleted_at'];

}
