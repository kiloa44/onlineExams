<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    protected $fillable=['name','description'];

    public function students(){
        $this->hasMany('App/Student','classroom_id','id');
    }
    public function subjects(){
        $this->hasMany('App/Subject','classroom_id','id');
    }
    public function headTeacher(){
        $this->hasOne('App/Teacher','id','teacher_id');
    }
    use SoftDeletes;
    protected $dates=['deleted_at'];
}
