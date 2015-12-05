<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $filable = ['main_id','main_category','sub_id','sub_category'];
}
