<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierItemRequest extends FormRequest
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
            //
            'Item_UID' => ['required'],
            'Item_Name' => ['required'],
            'Item_Description' => ['required'],
            'Category_Item' => ['required'],
            'Item_Size' => ['required'],
            'SKU' => ['required'],
            'UPC' => ['required'],
            'Barcode' => ['required'],
            'Serial_Number' => ['required'],
            'Item_Unit_Price' => ['required'],
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
            'Item_UID.required' => ['required'],
            'Item_Name.required' => ['required'],
            'Item_Description.required' => ['required'],
            'Category_Item.required' => ['required'],
            'Item_Size.required' => ['required'],
            'SKU.required' => ['required'],
            'UPC.required' => ['required'],
            'Barcode.required' => ['required'],
            'Serial_Number.required' => ['required'],
            'Item_Unit_Price.required' => ['required'],
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
