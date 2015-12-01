<?php

use Illuminate\Database\Seeder;
use App\Supdt;

class SupdtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supdt::create([
        	 'user_id' 		=>	10000,
        	 'division_id'	=>	1,
             'name'     	=>  'S.M.R.A.Pathirathna',
        	 'image'		=>	'10000.png',
             'month'        =>  '12',
             'year'         =>  '2015',
             
        ]);
    }
}
