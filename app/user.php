<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class user extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'fatherlastname', 'motherlastname','birthdate', 'gender', 'phonenumber', 'address', 'arrivaldate', 'registrationdate', 'role_id', 'position_id', 'department_id',  'email', 'password',
    ];
        //, 'roleID' 


   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo(role::class);
    }
    public function position(){
        return $this->belongsTo(position::class);
    }
    public function department(){
        return $this->belongsTo(department::class);
    }
}
