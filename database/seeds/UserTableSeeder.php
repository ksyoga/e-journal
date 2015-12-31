<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	 'id'           => 10105,
             'division_id'   =>  1,
        	 'name' 	    =>	'S.Yogananth',
        	 'email'	    =>	'ksyoga@gmail.com',
             'rank'         =>  'survy',
        	 'password'	    =>	Hash::make('yoga'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10045,
             'division_id'  =>  1,
             'name'     =>  'L.T.G.K.Chaturanga',
             'email'    =>  'chaturanga@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('chaturanga'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10048,
             'division_id'  =>  1,
             'name'     =>  'D.M.S.K.Dissanayake',
             'email'    =>  'sampath@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('sampath'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10076,
             'division_id'  =>  1,
             'name'     =>  'K.G.L.C.Kahatagahadiwela',
             'email'    =>  'lakshi@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('lakshi'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10044,
             'division_id'  =>  1,
             'name'     =>  'W.H.T.R.Hettrachchi',
             'email'    =>  'tushani@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('tushani'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10047,
             'division_id'  =>  1,
             'name'     =>  'J.A.S.Manuranga',
             'email'    =>  'manu@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('manu'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10084,
             'division_id'  =>  1,
             'name'     =>  'J.D.N.Nanayakkara',
             'email'    =>  'nelumka@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('nelumka'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10049,
             'division_id'  =>  1,
             'name'     =>  'K.B.Perera',
             'email'    =>  'bathe@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('bathe'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10046,
             'division_id'  =>  1,
             'name'     =>  'K.S.F.Ranwalage',
             'email'    =>  'doma@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('doma'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10053,
             'division_id'  =>  1,
             'name'     =>  'L.R.G.K.Rathnayake',
             'email'    =>  'gunash@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('gunash'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10050,
             'division_id'  =>  1,
             'name'     =>  'K.L.Roshan',
             'email'    =>  'roshan@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('roshan'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);
        User::create([
        	 'id'       => 10096,
             'division_id'  =>  1,
             'name'     =>  'A.Zuhas',
             'email'    =>  'zuhas@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('zuhas'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10000,
             'division_id'  =>  1,
             'name'     =>  'S.M.R.A.Pathirathna',
             'email'    =>  'pathi@gmail.com',
             'rank'     =>  'supdt',
             'password' =>  Hash::make('pathi'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);
    }
}
