<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\Util\Json;

class Question extends Model
{
    protected $fillable = ['subject_id','text','is_correct','correct_answer','type','choices'];

    public function storeChoices($choices){
        $this->choices=Json::encode($choices);
    }

    public function subject()
    {
        return $this->hasOne('App\Subject');
    }

    public function exams()
    {
        return $this->belongsToMany('App\Question','exam_questions')
            ->using('App\ExamQuestion');
    }



    use SoftDeletes;
    protected $dates=['deleted_at'];


}
