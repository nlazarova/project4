<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $fillable = [
        'name'
    ];

    public function stations()
    {
        return $this->belongsToMany('App\Station');
    }
}
