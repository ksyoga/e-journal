<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstrumentRequest extends Model
{
     protected $table = 'instrument_requests';


    public function instrument()
    {
    	return $this->belongsTo('App\Instrument');
    	
    }
    public function surveyorrequest()
    {
    	return $this->belongsTo('App\Surveyor','surveyor_id');
    	
    }
}
