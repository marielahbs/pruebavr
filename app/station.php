<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class station extends Model
{

    protected $fillable = ['center_id', 'department_id', 'difficulty'];
    

    public function center(){
        return $this->belongsTo(center::class);
    }
    public function department(){
        return $this->belongsTo(department::class);
    }
}
