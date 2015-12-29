<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelfCheck extends Model
{
    protected $table = 'self_checks';
    protected $fillable = ['surveyor_id','year','month','field_1','field_2','field_3','field_4','field_5','field_6',
    					  'field_7','field_8','field_9','field_10','field_11','field_12'];

	public function surveyor()
    {
        return $this->belongsTo('App\Surveyor');
    }
}
