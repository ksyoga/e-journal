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
        	 'vehicle_no'	=>	'C4 HB-1274',
             'image'    	=>  'toyota.jpg',
        ]);

        Vehicle::create([
        	 'supdt_id'		=> 1,
        	 'brand' 		=>	'ISUZU',
        	 'vehicle_no'	=>	'C4 WB-8278',
             'image'    	=>  'isuzu.jpg',
        ]);

        Vehicle::create([
        	 'supdt_id'		=> 1,
        	 'brand' 		=>	'NISSAN',
        	 'vehicle_no'	=>	'C4 AX-3268',
             'image'    	=>  'nissan.jpg',
        ]);

        Vehicle::create([
        	 'supdt_id'		=> 1,
        	 'brand' 		=>	'MITSUBISHI',
        	 'vehicle_no'	=>	'C4 SX-8280',
             'image'    	=>  'mitsubishi.jpg',
        ]);

        Vehicle::create([
             'supdt_id'     => 2,
             'brand'        =>  'TOYOTA',
             'vehicle_no'   =>  'C3 HB-1274',
             'image'        =>  'toyota.jpg',
        ]);

        Vehicle::create([
             'supdt_id'     => 2,
             'brand'        =>  'ISUZU',
             'vehicle_no'   =>  'C3 WB-8278',
             'image'        =>  'isuzu.jpg',
        ]);

        Vehicle::create([
             'supdt_id'     => 2,
             'brand'        =>  'NISSAN',
             'vehicle_no'   =>  'C3 AX-3268',
             'image'        =>  'nissan.jpg',
        ]);

        Vehicle::create([
             'supdt_id'     => 2,
             'brand'        =>  'MITSUBISHI',
             'vehicle_no'   =>  'C3 SX-8280',
             'image'        =>  'mitsubishi.jpg',
        ]);
    }
}
