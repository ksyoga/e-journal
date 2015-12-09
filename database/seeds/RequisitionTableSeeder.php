<?php

use Illuminate\Database\Seeder;
use App\Requisition;

class RequisitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Requisition::create([
        	 'supdt_id'         =>	1,
        	 'requisition_no'	=>	'TRI/TWG/2015/258',
        	 'received_date'	=>	'2015-10-14',
        	 'category'			=>	'2.1',
        	 'work_load'		=>	3.6,
        	 'lots'				=>	6,
        	 'extent'			=>	0.22725,
        	 'surveyor_id'		=>	1,
        	 'issued'			=>	'2015-10-23',
        	 'commanced'		=>	'2015-10-28',
             'status'           =>  1,
        	 'fieldwork'		=>	3,
        	 'planwork'			=>	5,
             'complet_date'     =>  '2015-12-03',
        	 'note'				=>	'Bacon ipsum dolor sit amet salami venison chicken flank fatback doner'
        ]);

        Requisition::create([
             'supdt_id'         =>  1,
             'requisition_no'   =>  'TRI/TWG/2015/158',
             'received_date'    =>  '2015-10-14',
             'category'         =>  '2.1',
             'work_load'        =>  3.6,
             'lots'             =>  6,
             'extent'           =>  0.22725,
             'surveyor_id'      =>  2,
             'issued'           =>  '2015-10-23',
             'commanced'        =>  '2015-10-28',
             'status'           =>  2,
             'fieldwork'        =>  3,
             'planwork'         =>  5,
             'complet_date'     =>  '2015-12-05',
             'note'             =>  'Bacon ipsum dolor sit amet salami venison chicken flank fatback doner'
        ]);

        Requisition::create([
             'supdt_id'         =>  1,
             'requisition_no'   =>  'TRI/TWG/2015/289',
             'received_date'    =>  '2015-10-14',
             'category'         =>  '2.1',
             'work_load'        =>  3.6,
             'lots'             =>  6,
             'extent'           =>  0.22725,
             'surveyor_id'      =>  12,
             'issued'           =>  '2015-10-23',
             'commanced'        =>  '2015-10-28',
             'status'           =>  3,
             'fieldwork'        =>  3,
             'planwork'         =>  5,
             'complet_date'     =>  '2015-12-17',
             'note'             =>  'Bacon ipsum dolor sit amet salami venison chicken flank fatback doner'
        ]);
    }
}
