<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'Recipe_Cards_Id',
            'Calories_Serving',
            'Carbs_Serving',
            'Protein_Serving',
            'Fat_Serving',
            'Ingredients_Name',
            'Calories_Unit',
            'Calories_Unit_Name',
            'Carbs_Unit',
            'Carbs_Unit_Name',
            'Protein_Unit',
            'Protein_Unit_Name',
            'Fat_Unit',
            'Fat_Unit_Name',
        ];
    }
}
