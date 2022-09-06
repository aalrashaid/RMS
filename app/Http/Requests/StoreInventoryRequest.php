<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInventoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // validation rules Later modfaion
            'Inventory_UID' => ['required'],
            'Name_Item' => ['required'],
            'SKU' => ['required'],
            'Barcode' => ['required'],
            'Serial_Number' => ['required'],
            'Category_Item' => ['required'],
            'Item_Size' => ['required'],
            'Item_Unit_Price' => ['required'],
            'Quantity_In_Stock' => ['required'],
            'Inventory_Value' => ['required'],
            'Stock_Status' => ['required'],
            'Reorder_Level' => ['required'],
            'Reorder_Time_In_Days' => ['required'],
            'Quantity_In_Reorder' => ['required'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
            'Inventory_UID.required' => ['Inventory UID Required'],
            'Name_Item.required' =>  [' Name Item Required'],
            'SKU.required' => ['SKU Required'],
            'Barcode.required' => ['Barcode Required'],
            'Serial_Number.required' => ['Serial Number Required'],
            'Category_Item.required' => ['Category Item Required'],
            'Item_Size.required' => ['Item Size Required'],
            'Item_Unit_Price.required' => ['Unit Price Required'],
            'Quantity_In_Stock.required' => ['Quantity In Stock Required'],
            'Inventory_Value.required' => ['Inventory Value Required'],
            'Stock_Status.required' => ['Stock Status Required'],
            'Reorder_Level.required' => ['Reorder Level Required'],
            'Reorder_Time_In_Days.required' => ['Reorder Time In Days Required'],
            'Quantity_In_Reorder.required' => ['Quantity In Reorder Required'],

        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //'email' => 'email address',
            '' => [],
        ];
    }
}
