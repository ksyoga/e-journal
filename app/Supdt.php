<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supdt extends Model
{
    protected $table = 'supdts';
    protected $filable = ['user_id','division_id','name','image'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function surveyor()
    {
    	return $this->hasMany('App\Surveyor');
    }

    public function requisition()
    {
        return $this->hasMany('App\Requisition');
    }

    public function sfas()
    {
        return $this->hasMany('App\SFA');
    }

   

}
