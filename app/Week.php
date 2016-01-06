<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $table = 'flowing_weeks';
    protected $fillable = ['surveyor_id','year','month','day','requ_id','pro_work','no_sfa','instrument','vehicle','travel','sfa_requ_id','sfa_work_asign','ss_note'];

	public function surveyor()
    {
        return $this->belongsTo('App\Surveyor');
    }

    
    public function requ_survey()
    {
        return $this->belongsTo('App\Requisition','requ_id');
        
    }
    public function requ_sfa()
    {
        return $this->belongsTo('App\Requisition','sfa_requ_id');
        
    }

}
