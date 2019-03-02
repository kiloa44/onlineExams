<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Psy\Util\Json;

class Question extends Model
{
    protected $fillable=['text','type'];

    public function exam(){
        return $this->hasOne('App/exam','id','exam_id');
    }
    public function storeChoices($choices){
        $this->choices=Json::encode($choices);
    }

    use SoftDeletes;
    protected $dates=['deleted_at'];
}
