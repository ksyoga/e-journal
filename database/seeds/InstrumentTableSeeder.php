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
        	 'model'	=>	'C4-12X74',
             'image'    =>  'trimble.jpg',
        ]);

        Instrument::create([
        	 'supdt_id'	=> 1,
        	 'brand' 	=>	'Sokia',
        	 'model'	=>	'C4-MX3D4',
             'image'    =>  'sokia.jpg',
        ]);

        Instrument::create([
        	 'supdt_id'	=> 1,
        	 'brand' 	=>	'Lica',
        	 'model'	=>	'C4-3X6-VX',
             'image'    =>  'lica.jpg',
        ]);

        Instrument::create([
             'supdt_id' => 2,
             'brand'    =>  'Trimble',
             'model'    =>  'C3-12X74',
             'image'    =>  'trimble.jpg',
        ]);

        Instrument::create([
             'supdt_id' => 2,
             'brand'    =>  'Sokia',
             'model'    =>  'C3-MX3D4',
             'image'    =>  'sokia.jpg',
        ]);

        Instrument::create([
             'supdt_id' => 2,
             'brand'    =>  'Lica',
             'model'    =>  'C3-X6VX',
             'image'    =>  'lica.jpg',
        ]);
    }
}
