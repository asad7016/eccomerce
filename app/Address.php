<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
   protected $fillable = [
        'addressline', 'state', 'city','zip','country','phone'
    ];
}
