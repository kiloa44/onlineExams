<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{

    protected $fillable = ['subject_id','name','description','begin_at','end_at','mark'];
    public function subject(){
        return $this->hasOne('App\Subject','id','subject_id');
    }

        public function exam_question()
        {
            return $this->hasMany('App\ExamQuestion');
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
