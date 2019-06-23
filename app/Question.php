<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\Util\Json;

class Question extends Model
{
    protected $fillable = ['class_subject_id','text','is_correct','correct_answer','type','choices'];

    public function storeChoices($choices){
        $this->choices=Json::encode($choices);
    }

     public function exam_question()
        {
            return $this->hasMany('App\ExamQuestion');
        }



    use SoftDeletes;
    protected $dates=['deleted_at'];


}
