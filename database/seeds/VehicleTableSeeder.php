<?php

use Illuminate\Database\Seeder;
use App\Vehicle;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::create([
        	 'supdt_id'		=> 1,
        	 'brand' 		=>	'TOYOTA',
        	 'vehicle_no'	=>	'EP HB-1274',
             'image'    	=>  'toyota.jpg',
        ]);

        Vehicle::create([
        	 'supdt_id'		=> 1,
        	 'brand' 		=>	'ISUZU',
        	 'vehicle_no'	=>	'WP WB-8278',
             'image'    	=>  'isuzu.jpg',
        ]);

        Vehicle::create([
        	 'supdt_id'		=> 1,
        	 'brand' 		=>	'NISSAN',
        	 'vehicle_no'	=>	'EP AX-3268',
             'image'    	=>  'nissan.jpg',
        ]);

        Vehicle::create([
        	 'supdt_id'		=> 1,
        	 'brand' 		=>	'MITSUBISHI',
        	 'vehicle_no'	=>	'NP SX-8280',
             'image'    	=>  'mitsubishi.jpg',
        ]);
    }
}
