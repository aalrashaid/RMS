<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHasIngredientsRecipeCardsRequest extends FormRequest
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
            // validation rules Later modfnaion
            'Ingredients_Name' => ['required'],
            'Ingredients_Unit' => ['required'],
            'Ingredients_Unit_Name' => ['required'],
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
            'Ingredients_Name.required' => ['A Ingredients Name Required'],
            'Ingredients_Unit.required' => ['Ingredients Unit Required'],
            'Ingredients_Unit_Name.required' => ['Ingredients Unit Name Required'],
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
