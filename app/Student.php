<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
   protected $fillable=['user_id','classroom_id'];

   public function user(){
       return $this->hasOne('App\User','id','user_id');
   }
   public function class_student()
   {
       return $this->hasMany('App\ClassStudent');
   }



    use SoftDeletes;
   protected $dates=['deleted_at'];
}
