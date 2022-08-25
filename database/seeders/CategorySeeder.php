<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // static data categories
        DB::table('Categories')->insert([

            // ,'slug' => SlugService::createSlug(categories::class,'slug', '')
            [
                'Name' => 'Apperizer',
                'Slug' => SlugService::createSlug(Category::class, 'slug', 'Apperizer'),
                'Description' => 'An hors d\'oeuvre, appetizer or starter is a small dish served before a meal in European cuisine. Some hors d\'oeuvres are served cold, others hot. Hors d\'oeuvres may be served at the dinner table as a part of the meal, or they may be served before seating, such as at a reception or cocktail party.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Name' => 'Desserts',
                'Slug' => SlugService::createSlug(Category::class, 'slug', 'Desserts'),
                'Description' => 'Dessert is a course that concludes a meal. The course consists of sweet foods, such as confections, and possibly a beverage such as dessert wine and liqueur. In some parts of the world, such as much of Central Africa and West Africa, and most parts of China, there is no tradition of a dessert course to conclude a meal.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Name' => 'Drinks',
                'Slug' => SlugService::createSlug(Category::class, 'slug', 'Drinks'),
                'Description' => 'Dessert is a course that concludes a meal. The course consists of sweet foods, such as confections, and possibly a beverage such as dessert wine and liqueur. In some parts of the world, such as much of Central Africa and West Africa, and most parts of China, there is no tradition of a dessert course to conclude a meal.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Name' => 'Main',
                'Slug' => SlugService::createSlug(Category::class, 'slug', 'Main'),
                'Description' => 'Dessert is a course that concludes a meal. The course consists of sweet foods, such as confections, and possibly a beverage such as dessert wine and liqueur. In some parts of the world, such as much of Central Africa and West Africa, and most parts of China, there is no tradition of a dessert course to conclude a meal.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'Name' => 'Salad',
                'Slug' => SlugService::createSlug(Category::class, 'slug', 'Salad'),
                'Description' => 'Dessert is a course that concludes a meal. The course consists of sweet foods, such as confections, and possibly a beverage such as dessert wine and liqueur. In some parts of the world, such as much of Central Africa and West Africa, and most parts of China, there is no tradition of a dessert course to conclude a meal.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
