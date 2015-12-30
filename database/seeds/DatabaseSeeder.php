<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(DistrictTableSeeder::class);
         $this->call(DivisionTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(SupdtTableSeeder::class);
         $this->call(SurveyorTableSeeder::class);
         $this->call(InstrumentTableSeeder::class);
         $this->call(VehicleTableSeeder::class);
         $this->call(SfasTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         
        //  $this->call(RequisitionTableSeeder::class);
        //  $this->call(InstrumentRequestTableSeeder::class);
        //  $this->call(VehicleRequestTableSeeder::class);
         
        //  $this->call(AmendmentTableSeeder::class);
        //  $this->call(WeekTableSeeder::class);
        //  $this->call(DiaryTableSeeder::class);
          
         

        Model::reguard();
    }
}
