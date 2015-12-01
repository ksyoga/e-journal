<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    
    protected $table = 'requisitions';
    protected $filable = ['supdt_id','requisition_no','received_date','category','work_load','lots','extent','fieldwork','planwork','issued','commanced','surveyor_id','note'];

     public function supdt()
    {
        return $this->belongsTo('App\Supdt');
    }

    public function surveyor()
    {
        return $this->belongsTo('App\Surveyor');
    }



}
