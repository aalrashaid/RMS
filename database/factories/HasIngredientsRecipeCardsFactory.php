<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'Recipe_Card_Id',

            'Ingredients_Name',
            'Ingredients_Unit',
            'Ingredients_Unit_Name',
        ];
    }
}
