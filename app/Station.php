<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $fillable = [
        'name', 'route_id'
    ];

    public function route()
    {
        return $this->belongsTo('App\Route');
    }

    public function fuels()
    {
        return $this->belongsToMany('App\Fuel');
    }
}
