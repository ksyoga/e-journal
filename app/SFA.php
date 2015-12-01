<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SFA extends Model
{	
	protected $table = 'sfas';
    protected $filable = ['supdt_id','code','name','rank','image'];
    
    public function supdt()
    {
        return $this->belongsTo('App\Supdt');
    }
}
