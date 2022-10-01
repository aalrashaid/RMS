<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Brands;
use App\Models\SupplierItem;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
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
            'Supplier_Items_ID' => SupplierItem::all()->fake()->random()->id,

            'Inventory_UID'  => $this->faker->randomDigit(),
            'Name_Item' => $this->faker->name($gender = null|'male'|'female'),
            //'Description_Item',
            'SKU' => $this->faker->randomDigit(),
            'Barcode'  => $this->faker->randomDigit(),
            'Serial_Number' => $this->faker->randomDigit(),
            'Category_Item'  => $this->faker->name($gender = null|'male'|'female'),
            'Item_Size'  => $this->faker->randomDigit(),
            'Item_Unit_Price'  => $this->faker->randomDigit(),
            'Quantity_In_Stock'  => $this->faker->randomDigit(),
            'Inventory_Value'  => $this->faker->randomDigit(),
            'Stock_Status'  => $this->faker->randomDigit(),
            'Reorder_Level'  => $this->faker->randomDigit(),
            'Reorder_Time_In_Days'  => $this->faker->randomDigit(),
            'Quantity_In_Reorder'  => $this->faker->randomDigit(),
        ];
    }
}
