<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StationFuel extends Model
{
    protected $fillable = [
    			'station_id',
    			'fuel_id',    			
    		];

    public $incrementing 	= false;

    protected $primaryKey 	= ['station_id', 'fuel_id'];

    protected $table 		= 'stations_fuels'; 

    public function stations() 
    {
    	return $this->belongsTo('App\Station');
    } 
}
