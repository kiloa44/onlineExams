<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    protected $fillable = ['name','description'];


    public function class_student()
    {
        return $this->hasMany('App\ClassStudent');
    }
    public function class_subject()
    {
        return $this->hasMany('App\ClassSubject');
    }
    public function headTeacher(){
        $this->hasOne('App/Teacher','id','teacher_id');
    }
    use SoftDeletes;
    protected $dates=['deleted_at'];
}
