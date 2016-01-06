<?php

use Illuminate\Database\Seeder;
use App\Surveyor;

class SurveyorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	Surveyor::create([
        	 'user_id'  => 10105,
        	 'supdt_id' =>	1,
        	 'name'		=>	'S.Yogananth',
             'image'    =>  '10105.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);

        Surveyor::create([
        	 'user_id'  => 10045,
        	 'supdt_id' =>	1,
        	 'name'		=>	'L.T.G.K.Chaturanga',
             'image'    =>  '10045.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);

        Surveyor::create([
        	 'user_id'  => 10048,
        	 'supdt_id' =>	1,
        	 'name'		=>	'D.M.S.K.Dissanayake',
             'image'    =>  '10048.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);

        Surveyor::create([
        	 'user_id'  => 10076,
        	 'supdt_id' =>	1,
        	 'name'		=>	'K.G.Lakshika',
             'image'    =>  '10076.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]); 

         Surveyor::create([
        	 'user_id'  => 10044,
        	 'supdt_id' =>	1,
        	 'name'		=>	'W.H.Tushani',
             'image'    =>  '10044.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);

        Surveyor::create([
        	 'user_id'  => 10047,
        	 'supdt_id' =>	1,
        	 'name'		=>	'J.A.S.Manurangai',
             'image'    =>  '10047.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);

        Surveyor::create([
        	 'user_id'  => 10084,
        	 'supdt_id' =>	1,
        	 'name'		=>	'J.D.Nelumka',
             'image'    =>  '10084.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);

        Surveyor::create([
        	 'user_id'  => 10049,
        	 'supdt_id' =>	1,
        	 'name'		=>	'K.B.Perera',
             'image'    =>  '10049.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);

        Surveyor::create([
        	 'user_id'  => 10046,
        	 'supdt_id' =>	1,
        	 'name'		=>	'K.S.F.Ranwalage',
             'image'    =>  '10046.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);

        Surveyor::create([
        	 'user_id'  => 10053,
        	 'supdt_id' =>	1,
        	 'name'		=>	'L.R.G.K.Rathnayake',
             'image'    =>  '10053.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]); 

        Surveyor::create([
        	 'user_id'  => 10050,
        	 'supdt_id' =>	1,
        	 'name'		=>	'K.L.Roshan',
             'image'    =>  '10050.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);

        Surveyor::create([
        	 'user_id'  => 10096,
        	 'supdt_id' =>	1,
        	 'name'		=>	'A.Zuhas',
             'image'    =>  '10096.jpg',
        	 'year'		=>	2015,
        	 'month' 	=>	12,
        ]);  

        // new Division

        Surveyor::create([
             'user_id'  => 10106,
             'supdt_id' =>  2,
             'name'     =>  'P.Dineshkumar',
             'image'    =>  '10105.jpg',
             'year'     =>  2015,
             'month'    =>  12,
        ]);

        Surveyor::create([
             'user_id'  => 10097,
             'supdt_id' =>  2,
             'name'     =>  'J.Vijayatharsan',
             'image'    =>  '10045.jpg',
             'year'     =>  2015,
             'month'    =>  12,
        ]);
    }
}
