<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{

    protected $fillable = ['class_subject_id','teacher_id','name','description','begin_at','end_at','mark'];


    public function exam_question()
    {
        return $this->hasMany('App\ExamQuestion');
    }
    public function class_subject(){
        return $this->hasOne('App\ClassSubject','id','class_subject_id');
    }
    public function teacher(){
        return $this->hasOne('App\Teacher','id','teacher_id');
    }




    use SoftDeletes;
    protected $dates=['deleted_at'];



    public static function boot()
    {
        parent::boot();
        static::deleting(function ($exam){
            $exam->exam_question->map(function ($question){
                $question->delete();
            });
        });
    }


}
