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
                            'fieldwork',
                            'planwork',
                            'commanced',
                            'note'];

     public function supdt()
    {
        return $this->belongsTo('App\Supdt');
    }

    public function surveyor()
    {
        return $this->belongsTo('App\Surveyor');
    }



}
