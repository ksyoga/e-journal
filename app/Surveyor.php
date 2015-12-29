<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveyor extends Model
{	
    protected $table = 'surveyors';
    protected $fillable = ['user_id','supdt_id','name','image','year','month'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function supdt()
    {
        return $this->belongsTo('App\Supdt');
    }

    public function diary()
    {
    	return $this->hasMany('App\Diary');
    }

    public function week()
    {
        return $this->hasMany('App\Week');
    }

    public function instrumentrequest()
    {
        return $this->hasMany('App\InstrumentRequest');
    }
   
   public function requisition()
    {
        return $this->hasMany('App\Requisition');
    }

    public function scopeFiedSum($query)
    {
        //$surveyor = Surveyor::findOrFail($surveyors_id);
        //return $surveyor->diary()->where('year',$surveyor->year)->where('month',$surveyor->month)->sum('$field_no');
        //return $query->where('id',1)::diary();
    }

}
