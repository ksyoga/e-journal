<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleRequest extends Model
{
    protected $table = 'vehicle_requests';


    public function vehicle()
    {
    	return $this->belongsTo('App\Vehicle');
    	
    }
    public function surveyorrequest()
    {
    	return $this->belongsTo('App\Surveyor','surveyor_id');
    	
    }
}
