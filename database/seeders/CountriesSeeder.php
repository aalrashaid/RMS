<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // static data countries
        DB::table('Countries')->insert([
            /**
             * ['Name'=>'', 'Alpha-2_Code'=>'', 'Alpha-3_Code'=>'', 'Numeric'=>'', 'Phone_Code'=>'', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
             */
            ['Name' => 'Kuwait', 'Alpha-2_Code' => 'KW', 'Alpha-3_Code' => 'KWT', 'Numeric' => '414', 'Phone_Code' => '965', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['Name' => 'United States of America', 'Alpha-2_Code' => 'US', 'Alpha-3_Code' => 'USA', 'Numeric' => '840', 'Phone_Code' => '1', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
            //['Name' => 'Kuwait', 'Alpha-2_Code' => 'KW', 'Alpha-3_Code' => 'KWT', 'Numeric' => '414', 'Phone_Code' => '965', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //['Name' => 'Kuwait', 'Alpha-2_Code' => 'KW', 'Alpha-3_Code' => 'KWT', 'Numeric' => '414', 'Phone_Code' => '965', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
