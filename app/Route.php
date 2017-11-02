<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Route extends Model
{
    
    use SoftDeletes;
    protected $fillable = [
        'name', 'length', 'routetype_id'
    ];
/////////ot
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
////////do
  //  public function city_route()
  //  {
  //      return $this->hasMany('App\CityRoute');
  //  }
}
