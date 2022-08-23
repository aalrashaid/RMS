<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\genders;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;

class gendersSeeder extends Seeder
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
        DB::table('genders')->insert([
            ['name' => 'Male'],
            ['name' => 'Fimale'],

        ]);
    }
}
