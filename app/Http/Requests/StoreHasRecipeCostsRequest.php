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
            'AP_Unit_Cost' => ['required'],
            'EP_Recipe_Unit' => ['required'],
            'EP_Unit_Cost' => ['required'],
            'EP_Yield' => ['required'],

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
            'Ingredients.required' => ['Ingredients Required'],
            'AP_Quantity.required' => ['AP Quantity Required'],
            'AP_Recipe_Unit.required' => ['AP Recipe Unit Required'],
            'AP_Unit_Cost.required' => ['AP Unit Cost Required'],
            'EP_Recipe_Unit.required' => ['EP Recipe Unit Required'],
            'EP_Unit_Cost.required' => ['EP Unit Cost Required'],
            'EP_Yield.required' => ['EP Yield Required'],
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
