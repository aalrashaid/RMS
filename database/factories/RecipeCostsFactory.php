<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Brands;
use App\Models\Category;
use App\Models\RecipeCard;

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
            'User_Id '=> User::all()->fake()->random()->id,
            'Brands_Id' => Brands::all()->fake()->random()->id,
            'Category_Id' => Category::all()->fake()->random()->id,
            //'Menus_Id',
            'Recipe_Card_Id' => RecipeCard::all()->fake()->random()->id,

            'Recipe_UID'=>$this->faker->numberBetween($min = 1, $max = 9000),

            'Recipe_Name' => $this->faker->title(),
            'Date_At'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Patch' =>$this->faker->numberBetween($min = 1, $max = 9000),
            'Serves' =>$this->faker->numberBetween($min = 1, $max = 30),
            'Menu_Recipe' => $this->faker->name($gender = null|'male'|'female'),
            'Food_Cost_Prcentage'=> $this->faker->optional($weight = 0.5, $default = false)->randomDigit,
            'Gross_Profit'=> $this->faker->randomNumber(2),
            'Margin'=> $this->faker->randomNumber(2),
            'COGS'=> $this->faker->randomNumber(2),
            'COGS_Prcentage'=> $this->faker->optional($weight = 0.5, $default = false)->randomDigit,
            'Yield_Prcentage'=> $this->faker->optional($weight = 0.5, $default = false)->randomDigit,
            'Ideal_Gross_Selling_Recipe'=> $this->faker->randomNumber(2),
        //'YieldPortion',
        //'idealGrossSellingPrice',
        ];
    }
}
