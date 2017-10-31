<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'name', 'length', 'routetype_id'
    ];

    public function routetype()
    {
        return $this->belongsTo('App\Routetype');
    }

    public function station()
    {
    	return $this->hasOne('App\Station');
    }

    public function cities()
    {
        return $this->belongsToMany('App\City');
    }

  //  public function city_route()
  //  {
  //      return $this->hasMany('App\CityRoute');
  //  }
}
