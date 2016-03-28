<?php

use Illuminate\Database\Seeder;
use App\Week;

class WeekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Week::create([
        	 'surveyor_id'		=>	1,
        	 'year'				=>	2015,
        	 'month'			=>	11,
        	 'day'				=>	'2015-11-1',
        	 'requ_id'			=>	'1',
        	 'pro_work'			=>	'Lotes Identification',
        	 'no_sfa'			=>	3,
        	 'instrument'		=>	'No',
        	 'vehicle'			=>	'Yes',
        	 'travel'			=>	23.6,
        	 'sfa_requ_id'		=>	'1',
        	 'sfa_work_asign'	=>	'1,2,3',
        	 'ss_note'			=> 'The acqusition is Higher Proretiey',
        ]);

        Week::create([
        	 'surveyor_id'		=>	1,
        	 'year'				=>	2015,
        	 'month'			=>	11,
        	 'day'				=>	'2015-11-2',
        	 'requ_id'			=>	'1',
        	 'pro_work'			=>	'Lotes Identification',
        	 'no_sfa'			=>	3,
        	 'instrument'		=>	'No',
        	 'vehicle'			=>	'Yes',
        	 'travel'			=>	23.6,
        	 'sfa_requ_id'		=>	'1',
        	 'sfa_work_asign'	=>	'1,2,3',
        	 'ss_note'			=> 'The acqusition is Higher Proretiey',
        ]);

        Week::create([
        	 'surveyor_id'		=>	1,
        	 'year'				=>	2015,
        	 'month'			=>	11,
        	 'day'				=>	'2015-11-3',
        	 'requ_id'			=>	'1',
        	 'pro_work'			=>	'Lotes Identification',
        	 'no_sfa'			=>	3,
        	 'instrument'		=>	'No',
        	 'vehicle'			=>	'Yes',
        	 'travel'			=>	23.6,
        	 'sfa_requ_id'		=>	'1',
        	 'sfa_work_asign'	=>	'1,2,3',
        	 'ss_note'			=> 'The acqusition is Higher Proretiey',
        ]);

        Week::create([
        	 'surveyor_id'		=>	1,
        	 'year'				=>	2015,
        	 'month'			=>	11,
        	 'day'				=>	'2015-11-4',
        	 'requ_id'			=>	'1',
        	 'pro_work'			=>	'Lotes Identification',
        	 'no_sfa'			=>	3,
        	 'instrument'		=>	'No',
        	 'vehicle'			=>	'Yes',
        	 'travel'			=>	23.6,
        	 'sfa_requ_id'		=>	'1',
        	 'sfa_work_asign'	=>	'1,2,3',
        	 'ss_note'			=> 'The acqusition is Higher Proretiey',
        ]);

        Week::create([
             'surveyor_id'      =>  1,
             'year'             =>  2015,
             'month'            =>  11,
             'day'              =>  '2015-11-5',
             'requ_id'           =>  '',
             'pro_work'         =>  'Project Work',
             'no_sfa'           =>  '',
             'instrument'       =>  'No',
             'vehicle'          =>  'No',
             'travel'           =>  0,
             'sfa_requ_id'       =>  '',
             'sfa_work_asign'   =>  '',
             'ss_note'          => 'The acqusition is Higher Proretiey',
        ]);

        Week::create([
             'surveyor_id'      =>  1,
             'year'             =>  2015,
             'month'            =>  11,
             'day'              =>  '2015-11-6',
             'requ_id'           =>  '',
             'pro_work'         =>  'Project Work',
             'no_sfa'           =>  '',
             'instrument'       =>  'No',
             'vehicle'          =>  'No',
             'travel'           =>  0,
             'sfa_requ_id'       =>  '',
             'sfa_work_asign'   =>  '',
             'ss_note'          => 'The acqusition is Higher Proretiey',
        ]);
        
    }
}
