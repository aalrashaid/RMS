<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'Recipe_Costs_Id',

            'Ingredients',
            'AP_Quantity',
            'AP_Recipe_Unit',
            'AP_Recipe_Unit_Name',
            'AP_Unit_Cost',
            'EP_Recipe_Unit',
            'EP_Recipe_Unit_Name',
            'EP_Unit_Cost',
            'EP_Yield_Percentage',
            'Extension',
            //'Total_Extension'
        ];
    }
}
