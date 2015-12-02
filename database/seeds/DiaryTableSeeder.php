<?php

use Illuminate\Database\Seeder;
use App\Diary;

class DiaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diary::create([
        	 'surveyor_id'	=>	1,
        	 'year'			=>	2015,
        	 'month'		=>	7,
        	 'day'			=>	'2015-07-01',
        	 'field_1'		=>	'TRI/TWG/2015/258',
        	 'field_2'		=>	'2.1',
        	 'field_3'		=>	'',
             'field_4'      =>  '',
             'field_5'      =>  '',
             'field_6'      =>  '1',
             'field_7'      =>  '',
             'field_8'      =>  '',
             'field_9'      =>  '',
             'field_10'     =>  '',
             'field_11'     =>  '',

             'field_12'     =>  8,
             'field_13'     =>  28,
             'field_14'     =>  24,
             'field_15'     =>  153,
             'field_16'     =>  1.85,
             'field_17'     =>  '',
             'field_18'     =>  '',
             'field_19'     =>  18,
             'field_20'     =>  '',
             'field_21'     =>  '',
             'field_22'     =>  '',
             'field_23'     =>  '',
             'field_24'     =>  '',
             'field_25'     =>  '',
             'field_26'     =>  '',
             'field_27'     =>  '',
             'field_28'     =>  '',

             'field_29'     =>  5,
             'field_30'     =>  'TRI/TWG/2015/258',
             'field_31'     =>  '2.1',
             'field_32'     =>  '',
             'field_33'     =>  0.5,
             'field_34'     =>  0.5,
             'field_35'     =>  '',
             'field_36'     =>  '',
             'field_37'     =>  '',
             'field_38'     =>  '',
             'field_39'     =>  '',
             'field_40'     =>  '',

             'field_41'     =>  2.50,
             'field_42'     =>  25,
             'field_43'     =>  '',
             'field_44'     =>  '',
             'field_45'     =>  '',
             'field_46'     =>  'F',
             'field_47'     =>  2.5,
             'field_48'     =>  25.6,
             'field_49'     =>  '',
             'field_50'     =>  'K.S.Y,L.K.R.G',
             'field_51'     =>  ''  
        ]);
        
        Diary::create([
             'surveyor_id'  =>  1,
             'year'         =>  2015,
             'month'        =>  7,
             'day'          =>  '2015-07-02',
             'field_1'      =>  'TRI/TWG/2015/258',
             'field_2'      =>  '2.1',
             'field_3'      =>  '',
             'field_4'      =>  '',
             'field_5'      =>  '',
             'field_6'      =>  '1',
             'field_7'      =>  '',
             'field_8'      =>  '',
             'field_9'      =>  '',
             'field_10'     =>  '',
             'field_11'     =>  '',

             'field_12'     =>  8,
             'field_13'     =>  28,
             'field_14'     =>  24,
             'field_15'     =>  153,
             'field_16'     =>  1.85,
             'field_17'     =>  '',
             'field_18'     =>  '',
             'field_19'     =>  18,
             'field_20'     =>  '',
             'field_21'     =>  '',
             'field_22'     =>  '',
             'field_23'     =>  '',
             'field_24'     =>  '',
             'field_25'     =>  '',
             'field_26'     =>  '',
             'field_27'     =>  '',
             'field_28'     =>  '',

             'field_29'     =>  5,
             'field_30'     =>  'TRI/TWG/2015/288',
             'field_31'     =>  '2.1',
             'field_32'     =>  '',
             'field_33'     =>  0.5,
             'field_34'     =>  0.5,
             'field_35'     =>  '',
             'field_36'     =>  '',
             'field_37'     =>  '',
             'field_38'     =>  '',
             'field_39'     =>  '',
             'field_40'     =>  '',

             'field_41'     =>  2.50,
             'field_42'     =>  25,
             'field_43'     =>  '',
             'field_44'     =>  '',
             'field_45'     =>  '',
             'field_46'     =>  'F',
             'field_47'     =>  2.5,
             'field_48'     =>  25.6,
             'field_49'     =>  '',
             'field_50'     =>  'K.S.Y,L.K.R.G',
             'field_51'     =>  ''  
        ]);
    }
}
