<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    
    protected $table = 'requisitions';
    protected $fillable = [
                            'supdt_id',
                            'requisition_no',
                            'received_date',
                            'category',
                            'work_load',
                            'lots',
                            'extent',
                            'surveyor_id',
                            'issued',
                            'commanced',
                            'fieldwork',
                            'planwork',
                            'status',
                            'complet_date',
                            'note',];

     public function supdt()
    {
        return $this->belongsTo('App\Supdt');
    }

    public function surveyor()
    {
        return $this->belongsTo('App\Surveyor');
    }

    public function iutilize(){
        return $this->hasMany('App\IUtilize');
    }

    public function vutilize(){
        return $this->hasMany('App\VUtilize');
    }

    public function diary(){
        return $this->hasMany('App\Diary');
    }

    public function week(){
        return $this->hasMany('App\Week');
    }

     

}
