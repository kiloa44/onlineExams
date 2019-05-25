<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassStudent extends Model
{
    protected $fillable = ['student_id','classroom_id'];


    public function student()
    {
        return $this->belongsTo('App\Student');
    }
    public function classroom()
    {
        return $this->belongsTo('App\Classroom');
    }
}
