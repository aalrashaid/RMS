<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecipeCard>
 */
class RecipeCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'User_Id',
            'Brands_Id',
            //'Cuisine_id',
            'Thumbnail_Id',
            'Recipe_UID',
            'Title',
            'Slug',
            'Description',
            'Youtube_Video',
            'Recipe_Method',
            'Difficulty',
            'Prep_Time',
            'Cook_Time',
            //'Time_Total',
            'Serves',
            'Directions',
        ];
    }
}
