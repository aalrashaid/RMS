<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Cuisine;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;


class unitsOfMeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // static data units Of Measure
        DB::table('Units_Of_Measure')->insert([

            [
                'Unit_Name' => 'Millimeter (mm)',
                'Unit_Type' => 'Length',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Inch (in)',
                'Unit_Type' => 'Length',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Centimeter (cm)',
                'Unit_Type' => 'Length',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Foot (ft)',
                'Unit_Type' => 'Length',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Meter (m)',
                'Unit_Type' => 'Length',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Yard (yd)',
                'Unit_Type' => 'Length',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Kilometer (km)',
                'Unit_Type' => 'Length',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Mile (mi)',
                'Unit_Type' => 'Length',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Milligram (mg)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Ounce (oz)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '5/6 Ounce (oz)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '2/3 Ounce (oz)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/2 Ounce (oz)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Gram (g)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Pound (lb)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
                         [
                'Unit_Name' => '1/2 Pound (lb)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
             [
                'Unit_Name' => '3/8 Pound (lb)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
             [
                'Unit_Name' => '1/4 Pound (lb)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/5 Pound (lb)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/8 Pound (lb)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/16 Pound (lb)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Kilogram (kg)',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Ton',
                'Unit_Type' => 'Weight',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Milliliter (ml)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Liter (l)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Cup',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '3/4 Cup',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/2 Cup',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '3/8 Cup',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/4 Cup',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/8 Cup',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/9 Cup',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/12 Cup',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/16 Cup',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Pint',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
                        [
                'Unit_Name' => '1/2 Pint',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '3/8 Pint',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/4 Pint',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/5 Pint',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/8 Pint',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/16 Pint',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Quart',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '5/7 Quart',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '3/5 Quart',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/2 Quart',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/4 Quart',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/6 Quart',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/8 Quart',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/11 Quart',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '3/50 Quart',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => 'Gallon',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
                        [
                'Unit_Name' => '3/4 Gallon',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/2 Gallon',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/4 Gallon',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '3/16 Gallon',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '5/16 Gallon',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/8 Gallon',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/16 Gallon',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '5/6 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '2/3 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/2 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
                        [
                'Unit_Name' => '2/5 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/3 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/4 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/6 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/8 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/12 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Unit_Name' => '1/24 Fluid ounce (fl.oz. or oz.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Tablespoon (Tbsp. or tbsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '5/6 Tablespoon (Tbsp. or tbsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '2/3 Tablespoon (Tbsp. or tbsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/2 Tablespoon (Tbsp. or tbsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/4 Tablespoon (Tbsp. or tbsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/6 Tablespoon (Tbsp. or tbsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/3 Tablespoon (Tbsp. or tbsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/12 Tablespoon (Tbsp. or tbsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Teaspoon (tsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '3/4 Teaspoon (tsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/2 Teaspoon (tsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => '1/4 Teaspoon (tsp.)',
                'Unit_Type' => 'Capacity (Volume)',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Celsius (Centigrade)',
                'Unit_Type' => 'Degrees',
                'Conversion_Factor' => '',
                'Region' =>'British',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'Unit_Name' => 'Fahrenheit',
                'Unit_Type' => 'Degrees',
                'Conversion_Factor' => '',
                'Region' =>'U.S.',
                'Description' => '',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],


            // [
            //     'Unit_Name' => '',
            //     'Unit_Type' => '',
            //     'Conversion_Factor' => '',
            //     'Region' =>'',
            //     'Description' => '',
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],



        ]);
    }
}
