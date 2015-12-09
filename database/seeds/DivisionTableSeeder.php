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
         	 'district_id'	=>	'1',
        	 'name'     	=>  'Diyatalawa',     
        ]);
    }
}
