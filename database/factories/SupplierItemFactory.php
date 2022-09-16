<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'User_Id',
            'Thumbnail_Id',
            'Brands_Id',
            'Supplier_Id',
            'Item_UID',
            'Item_Name',
            'Item_Description',
            'Category_Item',
            'Item_Size',
            'SKU',
            'UPC',
            'Barcode',
            'Serial_Number',
            'Item_Unit_Price',
        ];
    }
}
