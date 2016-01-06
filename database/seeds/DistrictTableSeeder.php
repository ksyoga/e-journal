<?php

use Illuminate\Database\Seeder;
use App\District;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        District::create([
             'id'       => 1,
        	 'name'     =>  'Badulla',     
        ]);
        District::create([
             'id'       => 2,
             'name'     =>  'Jaffna',     
        ]);
    }
}
