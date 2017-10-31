<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Routetype extends Model
{
    
     use SoftDeletes;
    protected $fillable = [
        'name', 'maxspeed', 
    ];

    public function route()
    {
    	return $this->hasOne('App\Route');
    }
    
    protected $dates = ['deleted_at'];
}
