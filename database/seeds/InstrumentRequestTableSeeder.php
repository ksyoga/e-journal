<?php

use Illuminate\Database\Seeder;
use App\InstrumentRequest;

class InstrumentRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InstrumentRequest::create([
        	 'instrument_id'	=> 1,
        	 'surveyor_id'		=>	1,
        	 'required_date'	=>	'2015-12-02',
             'request_for'		=>  'Requisition TC/TMP/2015/214',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok'
        ]);

        InstrumentRequest::create([
        	 'instrument_id'	=> 1,
        	 'surveyor_id'		=>	7,
        	 'required_date'	=>	'2015-12-12',
             'request_for'		=>  'Requisition TC/TMP/2015/218',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok',
        ]);

        InstrumentRequest::create([
        	 'instrument_id'	=> 2,
        	 'surveyor_id'		=>	2,
        	 'required_date'	=>	'2015-12-22',
             'request_for'		=>  'Requisition TC/TMP/2015/256',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok',
        ]);

        InstrumentRequest::create([
        	 'instrument_id'	=> 2,
        	 'surveyor_id'		=>	5,
        	 'required_date'	=>	'2015-12-30',
             'request_for'		=>  'Requisition TC/TMP/2015/118',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok',
        ]);
        InstrumentRequest::create([
        	 'instrument_id'	=> 3,
        	 'surveyor_id'		=>	11,
        	 'required_date'	=>	'2015-12-22',
             'request_for'		=>  'Requisition TC/TMP/2015/274',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok'
        ]);

        InstrumentRequest::create([
        	 'instrument_id'	=> 3,
        	 'surveyor_id'		=>	4,
        	 'required_date'	=>	'2015-12-21',
             'request_for'		=>  'Requisition TC/TMP/2015/518',
             'approved_by'		=>1,
             'supdt_note'		=>'Ok'
        ]);
    }
}
