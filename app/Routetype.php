<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routetype extends Model
{
    protected $fillable = [
        'name', 'maxspeed', 
    ];

    public function route()
    {
    	return $this->hasOne('App\Route');
    }
}
