<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SFA extends Model
{	
	protected $table = 'sfas';
    protected $fillable = ['supdt_id','code','name','rank','image'];
    
    public function supdt()
    {
        return $this->belongsTo('App\Supdt');
    }
}
