<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    
public function isAdmin(){
    return $this->admin;
}
public function address(){
    return $this->hasMany(Address::class);
    }


    public function order(){
    return $this->hasMany(Order::class);
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
