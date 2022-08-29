<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipeCardRequest extends FormRequest
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
            'Title' => ['required'],
            'Slug' => ['required'],
            'Recipe_UID' => ['required'],
            'Description' => ['required'],
            'Youtube_Video' => ['required'],
            'Recipe_Method' => ['required'],
            'Difficulty' => ['required'],
            'Prep_Time' => ['required'],
            'Cook_Time' => ['required'],
            'Time_Total' => ['required'],
            'Servings' => ['required'],
            'Directions' => ['required'],
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
            'Title.required' => ['Title Required'],
            'Slug.required' => ['Slug Required'],
            'Recipe_UID.required' => ['Recipe UID Required'],
            'Description.required' => ['Description Required'],
            'Youtube_Video.required' => ['Youtube Video Required'],
            'Recipe_Method.required' => ['Recipe Method Required'],
            'Difficulty.required' => ['Difficulty Required'],
            'Prep_Time.required' => ['Prep_Time Required'],
            'Cook_Time.required' => ['Cook Time Required'],
            'Time_Total.required' => ['Time Total Required'],
            'Servings.required' => ['Servings Required'],
            'Directions.required' => ['Directions Required'],
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
