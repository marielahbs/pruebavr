<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mission extends Model
{
    protected $fillable = ['subject_id', 'name', 'description'];

    public function subject(){
        return $this->belongsTo(subject::class);
    }
}
