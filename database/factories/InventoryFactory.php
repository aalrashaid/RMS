<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'User_Id',
            'Brands_Id',
            'Supplier_Items_ID',
            'Inventory_UID',
            'Name_Item',
            //'Description_Item',
            'SKU',
            'Barcode',
            'Serial_Number',
            'Category_Item',
            'Item_Size',
            'Item_Unit_Price',
            'Quantity_In_Stock',
            'Inventory_Value',
            'Stock_Status',
            'Reorder_Level',
            'Reorder_Time_In_Days',
            'Quantity_In_Reorder',
        ];
    }
}
