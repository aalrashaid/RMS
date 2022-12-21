<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Brands;
use App\Models\Thumbnails;

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
            'User_Id'=> User::all()->fake()->random()->id,
            'Brands_Id' => Brands::all()->fake()->random()->id,
            //'Cuisine_id',
            'Thumbnail_Id' => Thumbnails::all()->fake()->random()->id,
            'Recipe_UID' =>$this->faker->numberBetween($min = 1, $max = 9000),
            'Title' => $this->faker->title(),
            'Slug'=> $this->faker->slug(),
            'Description' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'Youtube_Video'=> $this->faker->url(),
            'Recipe_Method'=> $this->faker->numberBetween($min = 1, $max = 20),
            'Difficulty'=> $this->faker->numberBetween($min = 1, $max = 20),
            'Prep_Time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'Cook_Time'=> $this->faker->time($format = 'H:i:s', $max = 'now'),
            //'Time_Total',
            'Serves' => $this->faker->numberBetween($min = 1, $max = 20),
            'Directions' => $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        ];
    }
}
