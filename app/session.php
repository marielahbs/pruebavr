<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    protected $fillable = ['time', 'incorrectanswer', 'correctanswer', 'rating', 'station_id', 'department_id'];
}
