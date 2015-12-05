<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amendment extends Model
{
    protected $table = 'amendments';
    protected $fillable = ['supdt_id','surveyor_id','plan_no','received','supdt_note','completion','surveyor_note'];

    public function supdt()
    {
        return $this->belongsTo('App\Supdt');
    }

    public function surveyor()
    {
        return $this->belongsTo('App\Surveyor');
    }
}
