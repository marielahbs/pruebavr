<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class center extends Model
{
    protected $fillable = ['name', 'street', 'outdoornum', 'interiornum', 'longitude', 'latitude','user_id', 'category'];

    public function user(){
        return $this->belongsTo(user::class);
    }
}
