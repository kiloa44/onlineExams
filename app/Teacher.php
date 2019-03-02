<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    protected $fillable=['user_id','subject_id'];

    public function u

    use SoftDeletes;
    protected $dates=['deleted_at'];

}
