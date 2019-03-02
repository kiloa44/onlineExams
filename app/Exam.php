<?php

namespace App;

use function foo\func;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    protected $fillable=['subject_id','name','description'];
    public function questions(){
        return $this->hasMany('App/Question','exam_id','id');
    }
    public function subject(){
        return $this->hasOne('App/Subject','id','subject_id');
    }


    use SoftDeletes;
    protected $dates=['deleted_at'];

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($exam){
            $exam->questions->map(function ($question){
                $question->delete();
            });
        });
    }


}
