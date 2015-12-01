<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    
	protected $table = 'instruments';
    protected $filable = ['supdt_id','brand','model','image'];

    public function supdt()
    {
        return $this->belongsTo('App\Supdt');
    }

    public function instrumentrequest()
    {
    	return $this->hasMany('App\InstrumentRequest');
    }
}
