<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    protected $fillable = ['name','description'];

    public function students(){
        return $this->belongsToMany('App\Student','class_students')
            ->using('App\ClassStudent');
    }
    public function subjects()
    {
        return $this->belongsToMany('App\Subject','class_subjects')
            ->using('App\ClassSubject')
            ->withPivot("rate");
    }
    public function headTeacher(){
        $this->hasOne('App\Teacher','id','teacher_id');
    }
    use SoftDeletes;
    protected $dates=['deleted_at'];
}
