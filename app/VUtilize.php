<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VUtilize extends Model
{
    protected $table = 'vutilize';

    protected $fillable = ['requisition_id','vehicle_id','used_date','required_date','used_days'];

    public function requisition()
    {
    	return $this->belongsTo('App\Requisition','requisition_id');
    	
    }

    public function vehicle()
    {
    	return $this->belongsTo('App\Vehicle','vehicle_id');
    	
    }

     
}
