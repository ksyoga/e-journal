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
        	 'id'       => 10105,
        	 'name' 	=>	'S.Yogananth',
        	 'email'	=>	'ksyoga@gmail.com',
             'rank'     =>  'survy',
        	 'password'	=>	Hash::make('yoga'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10045,
             'name'     =>  'L.T.G.K.Chaturanga',
             'email'    =>  'chaturanga@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('chaturanga'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10048,
             'name'     =>  'D.M.S.K.Dissanayake',
             'email'    =>  'sampath@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('sampath'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10076,
             'name'     =>  'K.G.L.C.Kahatagahadiwela',
             'email'    =>  'luxce@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('luxce'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10044,
             'name'     =>  'W.H.T.R.Hettrachchi',
             'email'    =>  'tusane@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('tusane'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10047,
             'name'     =>  'J.A.S.Manuranga',
             'email'    =>  'manu@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('manu'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10084,
             'name'     =>  'J.D.N.Nanayakkara',
             'email'    =>  'nelum@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('nelum'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10049,
             'name'     =>  'K.B.Perera',
             'email'    =>  'bathe@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('bathe'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10046,
             'name'     =>  'K.S.F.Ranwalage',
             'email'    =>  'doma@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('doma'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10053,
             'name'     =>  'L.R.G.K.Rathnayake',
             'email'    =>  'gunash@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('gunash'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10050,
             'name'     =>  'K.L.Roshan',
             'email'    =>  'roshan@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('roshan'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);
        User::create([
        	 'id'       => 10096,
             'name'     =>  'A.Zuhas',
             'email'    =>  'zuhas@gmail.com',
             'rank'     =>  'survy',
             'password' =>  Hash::make('zuhas'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);

        User::create([
        	 'id'       => 10000,
             'name'     =>  'S.M.R.A.Pathirathna',
             'email'    =>  'pathi@gmail.com',
             'rank'     =>  'supdt',
             'password' =>  Hash::make('pathi'),
             // 'month'     =>  12,
             // 'year'      =>  2015,
        ]);
    }
}
