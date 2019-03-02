<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    protected $fillable=['user_id','subject_id'];

    public function user(){
        return $this->hasOne('App/User','id','user_id');
    }
    public function classroon(){
        return $this->hasOne('App/Classroom','id','classroom_id');
    }
    public function subject(){
        $this->hasOne('App/Subject','id','subject_id');
    }

    use SoftDeletes;
    protected $dates=['deleted_at'];

}
