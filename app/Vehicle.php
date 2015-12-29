<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table = 'vehicles';
    protected $filable = ['supdt_id','brand','vehicle_no','image'];

    public function supdt()
    {
        return $this->belongsTo('App\Supdt');
    }

    public function vehiclerequest()
    {
    	return $this->hasMany('App\VehicleRequest');
    }

    public function vutilize(){
        return $this->hasMany('App\VUtilize');
    }
}
