<?php

use Illuminate\Database\Seeder;
use App\SFA;

class SfasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SFA::create([
        	 'supdt_id' =>	1,
        	 'code'		=>	'K.S.Y',
        	 'name'		=>	'S.Yogananth',
        	 'rank'		=>	'Survey Field Assistans Class - I',
        	 'service'	=>	90,
             'image'    =>  '10105.jpg',
        ]);

        SFA::create([
        	 'supdt_id' =>	1,
        	 'code'		=>	'L.T.G.K.C',
        	'name'		=>	'L.T.G.K.Chaturanga',
        	 'rank'		=>	'Survey Field Assistans Class - II',
        	 'service'	=>	70,
             'image'    =>  '10045.jpg',
        ]);

        SFA::create([
        	 'supdt_id' =>	1,
        	 'code'		=>	'D.M.S.K.D',
        	 'name'		=>	'D.M.S.K.Dissanayake',
        	 'rank'		=>	'Survey Field Assistans Class - I',
        	 'service'	=>	80,
             'image'    =>  '10048.jpg',
        ]);

        SFA::create([
        	 'supdt_id' =>	1,
        	 'code'		=>	'K.G.L.C.K',
        	 'name'		=>	'K.G.L.C.Kahatagahadiwela',
        	 'rank'		=>	'Survey Field Assistans Class - I',
        	 'service'	=>	50,
             'image'    =>  '10076.jpg',
        ]);
    }
}
