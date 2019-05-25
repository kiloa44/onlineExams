<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
   protected $fillable=['user_id','classroom_id'];

   public function user(){
       return $this->hasOne('App/User','id','user_id');
   }
   public function classroom(){
       return $this->hasOne('App/Classroom','id','classroom_id');
   }


   use SoftDeletes;
   protected $dates=['deleted_at'];
}
