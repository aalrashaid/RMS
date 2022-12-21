<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RecipeCard;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Has_Ingredients_Recipe_Cards>
 */
class HasIngredientsRecipeCardsFactory extends Factory
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
            'Recipe_Card_Id' => RecipeCard::all()->fake()->random()->id,

            'Ingredients_Name' => $this->faker->randomDigit(),
            'Ingredients_Unit' => $this->faker->randomDigit(),
            'Ingredients_Unit_Name'=> $this->faker->randomDigit(),
        ];
    }
}
