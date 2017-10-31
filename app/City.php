<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 
    ];

    public function routes()
    {
        return $this->belongsToMany('App\Route');
    }
}
