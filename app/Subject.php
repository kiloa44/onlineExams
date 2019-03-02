<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    protected $fillable=['name','classroom_id','teacher_id'];

   public function exams(){
       $this->hasMany('App/Exam','exam_id','id');
   }
    public function classroom(){
        $this->hasOne('App/Classroom','id','classroom_id');
    }


    use SoftDeletes;
    protected $dates=['deleted_at'];
}
