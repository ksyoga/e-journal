<?php

use Illuminate\Database\Seeder;
use App\Instrument;

class InstrumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instrument::create([
        	 'supdt_id'	=> 1,
        	 'brand' 	=>	'Trimble',
        	 'model'	=>	'HB-12X74',
             'image'    =>  'trimble.jpg',
        ]);

        Instrument::create([
        	 'supdt_id'	=> 1,
        	 'brand' 	=>	'Sokia',
        	 'model'	=>	'ED-MX3D4',
             'image'    =>  'sokia.jpg',
        ]);

        Instrument::create([
        	 'supdt_id'	=> 1,
        	 'brand' 	=>	'Lica',
        	 'model'	=>	'D3X6-VX',
             'image'    =>  'lica.jpg',
        ]);
    }
}
