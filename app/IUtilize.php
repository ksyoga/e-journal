<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IUtilize extends Model
{
    protected $table = 'iutilize';

    protected $fillable = ['requisition_id','instrument_id','used_date','required_date','used_days'];

    public function requisition()
    {
    	return $this->belongsTo('App\Requisition','requisition_id');
    	
    }

    public function instrument()
    {
    	return $this->belongsTo('App\Instrument','instrument_id');
    	
    }
}
