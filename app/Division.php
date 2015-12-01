<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = 'divisions';
    protected $filable = ['district_id','name'];

   

    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function supdt()
    {
        return $this->hasMany('App\Supdt');
      
    }

    

}
