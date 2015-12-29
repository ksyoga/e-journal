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

        
        SFA::create([
             'supdt_id' =>  1,
             'code'     =>  'W.H.T.R.H',
             'name'     =>  'W.H.T.R.Hettrachchi',
             'rank'     =>  'Survey Field Assistans Class - III',
             'service'  =>  50,
             'image'    =>  '10044.jpg',
        ]);

        SFA::create([
             'supdt_id' =>  1,
             'code'     =>  'J.A.S.M',
             'name'     =>  'J.A.S.Manurangai',
             'rank'     =>  'Survey Field Assistans Class - II',
             'service'  =>  70,
             'image'    =>  '10047.jpg',
        ]);

        SFA::create([
             'supdt_id' =>  1,
             'code'     =>  'J.D.N.N',
             'name'     =>  'J.D.N.Nanayakkara',
             'rank'     =>  'Survey Field Assistans Class - II',
             'service'  =>  70,
             'image'    =>  '10084.jpg',
        ]);

        SFA::create([
             'supdt_id' =>  1,
             'code'     =>  'K.B.P',
             'name'     =>  'K.B.Perera',
             'rank'     =>  'Survey Field Assistans Class - II',
             'service'  =>  70,
             'image'    =>  '10049.jpg',
        ]);

        SFA::create([
             'supdt_id' =>  1,
             'code'     =>  'K.S.F.R',
             'name'     =>  'K.S.F.Ranwalage',
             'rank'     =>  'Survey Field Assistans Class - I',
             'service'  =>  90,
             'image'    =>  '10046.jpg',
        ]);

        SFA::create([
             'supdt_id' =>  1,
             'code'     =>  'L.R.G.K.R',
             'name'     =>  'L.R.G.K.Rathnayake',
             'rank'     =>  'Survey Field Assistans Class - I',
             'service'  =>  90,
             'image'    =>  '10053.jpg',
        ]);

        SFA::create([
             'supdt_id' =>  1,
             'code'     =>  'K.L.R',
             'name'     =>  'K.L.Roshan',
             'rank'     =>  'Survey Field Assistans Class - I',
             'service'  =>  80,
             'image'    =>  '10050.jpg',
        ]);

        SFA::create([
             'supdt_id' =>  1,
             'code'     =>  'A.Z.U',
             'name'     =>  'A.Zuhas',
             'rank'     =>  'Survey Field Assistans Class - I',
             'service'  =>  80,
             'image'    =>  '10096.jpg',
        ]);
    }
}
