<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHasRecipeCostsRequest extends FormRequest
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
            // validation rules Later modfaion
            'Ingredients' => ['required'],
            'AP_Quantity' => ['required'],
            'AP_Recipe_Unit' => ['required'],
            'AP_Recipe_Unit_Name' => ['required'],
            'AP_Unit_Cost' => ['required'],
            'EP_Recipe_Unit' => ['required'],
            'EP_Recipe_Unit_Name' => ['required'],
            'EP_Unit_Cost' => ['required'],
            'EP_Yield_Percentage' => ['required'],
            'Extension' => ['required'],
            'Total_Extension' => ['required'],

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
            'Ingredients.required' => ['Ingredients'],
            'AP_Quantity.required' => ['AP_Quantity'],
            'AP_Recipe_Unit.required' => ['AP_Recipe_Unit'],
            'AP_Recipe_Unit_Name.required' => ['AP_Recipe_Unit_Name'],
            'AP_Unit_Cost.required' => ['AP_Unit_Cost'],
            'EP_Recipe_Unit.required' => ['EP_Recipe_Unit'],
            'EP_Recipe_Unit_Name.required' => ['EP_Recipe_Unit_Name'],
            'EP_Unit_Cost.required' => ['EP_Unit_Cost'],
            'EP_Yield_Percentage.required' => ['EP_Yield_Percentage'],
            'Extension.required' => ['Extension'],
            'Total_Extension.required' => ['Total_Extension'],
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
