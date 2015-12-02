<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $table = 'flowing_weeks';
    protected $filable = ['surveyor_id','year','month','day','req_no','pro_work','no_sfa','instrument','vehicle','travel','sfa_req_no','sfa_work_asign','ss_note'];

	public function surveyor()
    {
        return $this->belongsTo('App\Surveyor');
    }

}
