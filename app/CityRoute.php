<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CityRoute extends Model
{
    protected $fillable = [
    			'city_from',
    			'city_to',
    			'route_id'
    		];

    public $incrementing 	= false;

    protected $primaryKey 	= ['city_id', 'route_id'];

    //protected $primaryKey 	= ['city_from', 'city_to', 'route_id'];

    protected $table 		= 'cities_routes'; 

    public function route() 
    {
    	return $this->belongsTo('App\Route');
    } 
}
