<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherSubject extends Model
{
    protected $fillable = ['teacher_id','subjects_id'];


    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

}
