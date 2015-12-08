<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleRequest extends Model
{
    protected $table = 'vehicle_requests';

    protected $fillable = ['vehicle_id','surveyor_id','required_date','request_for','approved_by','supdt_note'];


    public function vehicle()
    {
    	return $this->belongsTo('App\Vehicle');
    	
    }
    public function surveyorrequest()
    {
    	return $this->belongsTo('App\Surveyor','surveyor_id');
    	
    }
}
