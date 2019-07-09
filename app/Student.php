<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
   protected $fillable=['user_id','guardian_id','status'];

   public function user(){
       return $this->hasOne('App\User','id','user_id');
   }
   public function classrooms()
   {
       return $this->belongsToMany('App\Classroom','class_students')->using('App\ClassStudent');
   }

   public function guardian(){
       return $this->hasOne('App\Guardian','id','guardian_id');
   }
    public function certifications(){
        return $this->hasMany('App\Certification');
    }



    use SoftDeletes;
   protected $dates=['deleted_at'];
}
