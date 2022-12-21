<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RecipeCosts;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HasRecipeCosts>
 */
class HasRecipeCostsFactory extends Factory
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
            'Recipe_Costs_Id'=> RecipeCosts::all()->fake()->random()->id,

            'Ingredients' => RecipeCosts::all()->fake()->random()->id,
            'AP_Quantity' => RecipeCosts::all()->fake()->random()->id,
            'AP_Recipe_Unit' => RecipeCosts::all()->fake()->random()->id,
            'AP_Recipe_Unit_Name' => RecipeCosts::all()->fake()->random()->id,
            'AP_Unit_Cost' => RecipeCosts::all()->fake()->random()->id,
            'EP_Recipe_Unit' => RecipeCosts::all()->fake()->random()->id,
            'EP_Recipe_Unit_Name' => RecipeCosts::all()->fake()->random()->id,
            'EP_Unit_Cost' => RecipeCosts::all()->fake()->random()->id,
            'EP_Yield_Percentage'=> RecipeCosts::all()->fake()->random()->id,
            'Extension' => RecipeCosts::all()->fake()->random()->id,
            //'Total_Extension'
        ];
    }
}
