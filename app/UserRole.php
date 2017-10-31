<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRole extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name'
    ];
      public function user()
    {
    	return $this->belongsTo('App\User');
    }
    protected $dates = ['deleted_at'];
}
