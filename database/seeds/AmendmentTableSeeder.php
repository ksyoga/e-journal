<?php

use Illuminate\Database\Seeder;
use App\Amendment;

class AmendmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Amendment::create([
        	 'supdt_id'		=>	1,
        	 'surveyor_id'	=>	1,
        	 'plan_no'		=>	'TC/QW/1245',
        	 'received'		=>	'2015-05-23',
        	 'supdt_note'	=>	'And the web just isn’t the same without you.Let’s get you back online',
        	 'completion'	=>	'2015-6-03',
        	 'surveyor_note'=>	'And the web just isn’t the same without you.Let’s get you back online',     
        ]);

        Amendment::create([
        	 'supdt_id'		=>	1,
        	 'surveyor_id'	=>	2,
        	 'plan_no'		=>	'TC/QW/1285',
        	 'received'		=>	'2015-04-27',
        	 'supdt_note'	=>	'And the web just isn’t the same without you.Let’s get you back online',
        	 'completion'	=>	'2015-5-17',
        	 'surveyor_note'=>	'And the web just isn’t the same without you.Let’s get you back online',     
        ]);

    }
}
