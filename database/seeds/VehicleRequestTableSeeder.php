<?php

use Illuminate\Database\Seeder;
use App\VehicleRequest;

class VehicleRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleRequest::create([
        	 'vehicle_id'		=> 1,
        	 'surveyor_id'		=>	1,
        	 'required_date'	=>	'2015-12-02',
             'request_for'		=>  'Requisition TC/TMP/2015/214',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok'
        ]);

        VehicleRequest::create([
        	 'vehicle_id'		=> 1,
        	 'surveyor_id'		=>	2,
        	 'required_date'	=>	'2015-12-02',
             'request_for'		=>  'Requisition TC/TMP/2015/214',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok'
        ]);

        VehicleRequest::create([
        	 'vehicle_id'		=> 2,
        	 'surveyor_id'		=>	3,
        	 'required_date'	=>	'2015-12-02',
             'request_for'		=>  'Requisition TC/TMP/2015/214',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok'
        ]);

        VehicleRequest::create([
        	 'vehicle_id'		=> 2,
        	 'surveyor_id'		=>	4,
        	 'required_date'	=>	'2015-12-02',
             'request_for'		=>  'Requisition TC/TMP/2015/214',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok'
        ]);

        VehicleRequest::create([
        	 'vehicle_id'		=> 3,
        	 'surveyor_id'		=>	5,
        	 'required_date'	=>	'2015-12-02',
             'request_for'		=>  'Requisition TC/TMP/2015/214',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok'
        ]);

        VehicleRequest::create([
        	 'vehicle_id'		=> 4,
        	 'surveyor_id'		=>	6,
        	 'required_date'	=>	'2015-12-02',
             'request_for'		=>  'Requisition TC/TMP/2015/214',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok'
        ]);
    }
}
