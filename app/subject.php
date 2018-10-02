<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $fillable = ['course_id', 'name', 'description'];

    public function course(){
        return $this->belongsTo(course::class);
    }
}
