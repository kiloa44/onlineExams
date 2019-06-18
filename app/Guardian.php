<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guardian extends Model
{
    protected $fillable = ['name','identity_number','phone_number'];


    public function childs(){
        return $this->hasMany('App\Student');
    }




    use SoftDeletes;
    protected $dates=['deleted_at'];
}
