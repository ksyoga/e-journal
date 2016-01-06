<?php

use Illuminate\Database\Seeder;
use App\Division;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Division::create([
             'id'           => 1,
         	 'district_id'	=>	'1',
        	 'name'     	=>  'BDC14, Class No 4',     
        ]);
         Division::create([
             'id'           =>  2,
             'district_id'  =>  '2',
             'name'         =>  'BDC14, Class No 3',     
        ]);
    }
}
