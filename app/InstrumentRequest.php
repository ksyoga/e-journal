<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstrumentRequest extends Model
{
     protected $table = 'instrument_requests';

     protected $fillable = ['instrument_id','surveyor_id','required_date','request_for','approved_by','supdt_note'];


    public function instrument()
    {
    	return $this->belongsTo('App\Instrument');
    	
    }
    public function surveyorrequest()
    {
    	return $this->belongsTo('App\Surveyor','surveyor_id');
    	
    }
}
