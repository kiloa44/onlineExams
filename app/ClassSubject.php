<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ClassSubject extends Pivot
{
    protected $table='class_subjects';

    public function subject(){
        return $this->hasOne('App\Subject','id','subject_id');
    }
    public function classroom(){
        return $this->hasOne('App\Classroom','id','classroom_id');
    }
}
