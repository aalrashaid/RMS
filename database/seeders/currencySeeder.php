<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class currencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // static data cuisines
        DB::table('Currency')->insert([
            [
                'Country' => 'United States Of America',
                'Currency' => 'US Dollar',
                'Code' => 'USD',
                'Minor_Unit' => '2',
                'Symbol' => '$',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],


        ]);
    }
}
