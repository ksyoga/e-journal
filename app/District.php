<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $filable = ['name'];

    public function division()
    {
    	return $this->hasMany('App\Division');
    }
}
