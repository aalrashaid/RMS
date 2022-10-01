<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Brands;
use App\Models\Category;
use App\Models\RecipeCard;
use App\Models\Thumbnails;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
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
            'user_id'=> User::all()->fake()->random()->id,
            'Brands_Id' => Brands::all()->fake()->random()->id,
            'Category_Id' => Category::all()->fake()->random()->id,
            'Thumbnail_Id' => Thumbnails::all()->fake()->random()->id,
            'Recipe_Cards_Id' => RecipeCard::all()->fake()->random()->id,
            'Name'=> $this->faker->name($gender = null|'male'|'female'),
            'Slug' => $this->faker->slug(),
            'Description'=> $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            'Price'=> $this->faker->randomNumber(2),
        ];
    }
}
