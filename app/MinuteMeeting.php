<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MinuteMeeting extends Model
{







    use SoftDeletes;
    protected $dates=['deleted_at'];
}
