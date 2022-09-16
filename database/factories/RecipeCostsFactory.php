<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RecipeCosts>
 */
class RecipeCostsFactory extends Factory
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
            'Category_Id',
            //'Menus_Id',
            'Recipe_Card_Id',

            'Recipe_UID',

            'Recipe_Name',
            'Date_At',
            'Patch',
            'Serves',
            'Menu_Recipe',
            'Food_Cost_Prcentage',
            'Gross_Profit',
            'Margin',
            'COGS',
            'COGS_Prcentage',
            'Yield_Prcentage',
            'Ideal_Gross_Selling_Recipe',
        //'YieldPortion',
        //'idealGrossSellingPrice',
        ];
    }
}
