<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RecipeCard;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HasNutritionFactsRecipeCards>
 */
class HasNutritionFactsRecipeCardsFactory extends Factory
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
            'Recipe_Cards_Id' => RecipeCard::all()->fake()->random()->id,

            'Calories_Serving' => $this->faker->randomDigit(),
            'Carbs_Serving' => $this->faker->randomDigit(),
            'Protein_Serving' => $this->faker->randomDigit(),
            'Fat_Serving'=> $this->faker->randomDigit(),
            'Ingredients_Name'=> $this->faker->randomDigit(),
            'Calories_Unit'=> $this->faker->randomDigit(),
            'Calories_Unit_Name' => $this->faker->randomDigit(),
            'Carbs_Unit' => $this->faker->randomDigit(),
            'Carbs_Unit_Name' => $this->faker->randomDigit(),
            'Protein_Unit' => $this->faker->randomDigit(),
            'Protein_Unit_Name' => $this->faker->randomDigit(),
            'Fat_Unit' => $this->faker->randomDigit(),
            'Fat_Unit_Name' => $this->faker->randomDigit(),
        ];
    }
}
