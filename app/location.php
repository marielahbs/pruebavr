<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $fillable = ['name', 'longitude', 'latitude', 'user_id'];

    public function user(){

        return $this->belongsTo(user::class);
    }
}
