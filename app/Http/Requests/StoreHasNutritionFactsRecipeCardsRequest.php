<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHasNutritionFactsRecipeCardsRequest extends FormRequest
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
            // validation rules Later modfnaion
            'Calories_Serving' => ['required'],
            'Carbs_Serving' => ['required'],
            'Protein_Serving' => ['required'],
            'Fat_Serving' => ['required'],
            'Ingredients_Name' => ['required'],
            'Calories_Unit' => ['required'],
            'Calories_Unit_Name' => ['required'],
            'Carbs_Unit' => ['required'],
            'Carbs_Unit_Name' => ['required'],
            'Protein_Unit' => ['required'],
            'Protein_Unit_Name' => ['required'],
            'Fat_Unit' => ['required'],
            'Fat_Unit_Name' => ['required'],
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
            'Calories_Serving.required' => ['Calories Serving Required'],
            'Carbs_Serving.required' => ['Carbs Serving Rrequired'],
            'Protein_Serving.required' => ['Protein Serving Required'],
            'Fat_Serving.required' => ['Fat Serving Required'],
            'Ingredients_Name.required' => ['Ingredients Name Required'],
            'Calories_Unit.required' => ['Calories Unit Required'],
            'Calories_Unit_Name.required' => ['Calories Unit Name Required'],
            'Carbs_Unit.required' => ['Carbs Unit Required'],
            'Carbs_Unit_Name.required' => ['Carbs_Unit_Name Required'],
            'Protein_Unit.required' => ['Protein Unit Required'],
            'Protein_Unit_Name.required' => ['Protein Unit Name Required'],
            'Fat_Unit.required' => ['Fat Unit Required'],
            'Fat_Unit_Name.required' => ['Fat Unit Name Required'],
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
