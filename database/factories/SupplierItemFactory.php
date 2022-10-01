<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Brands;
use App\Models\Supplier;
use App\Models\Thumbnails;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SupplierItem>
 */
class SupplierItemFactory extends Factory
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
            'User_Id' => User::all()->fake()->random()->id,
            'Brands_Id'=> Brands::all()->fake()->random()->id,
            'Supplier_Id' => Supplier::all()->fake()->random()->id,
            'Thumbnail_Id' => $this->faker->numberBetween($min = 1, $max = 5),

            'Item_UID' => $this->faker->numberBetween($min = 1, $max = 9000),
            'Item_Name' => $this->faker->name($gender = null|'male'|'female'),
            'Item_Description' => $this->faker->slug(),
            'Category_Item' => $this->faker->name($gender = null|'male'|'female'),
            'Item_Size' => $this->faker->randomDigit(),
            'SKU' => $this->faker->randomDigit(),
            'UPC'=> $this->faker->randomDigit(),
            'Barcode' => $this->faker->ean13(),
            'Serial_Number' => $this->faker->randomDigit(),
            'Item_Unit_Price' => $this->faker->randomNumber(2),
        ];
    }
}
