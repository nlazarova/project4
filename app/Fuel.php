<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $fillable = [
        'name', 'route_id',
    ];

    public function stations()
    {
        return $this->belongsToMany('App\Station');
    }
}
