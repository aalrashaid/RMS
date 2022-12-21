<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecipeCostsRequest extends FormRequest
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
            'Recipe_UID' => ['required'],
            'Recipe_Name' => ['required'],
            'Date_At' => ['required'],
            'Patch' => ['required'],
            'Serves' => ['required'],
            'Menu_Price' => ['required'],
            'Food_Cost_Prcentage' => ['required'],
            'Gross_Profit' => ['required'],
            'Margin' => ['required'],
            'COGS' => ['required'],
            'COGS_Prcentage' => ['required'],
            'Yield_Prcentage' => ['required'],
            'Ideal_Gross_Selling_Price' => ['required'],
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
            'Recipe_UID' => ['Recipe UID Required'],
            'Recipe_Name' => ['Recipe Name Required'],
            'Date_At' => ['Date At Required'],
            'Patch' => ['Patch Required'],
            'Serves' => ['Serves Required'],
            'Menu_Price' => ['Menu Price Required'],
            'Food_Cost_Prcentage' => ['Food Cost Prcentage Required'],
            'Gross_Profit' => ['Gross Profit Required'],
            'Margin' => ['Margin Required'],
            'COGS' => ['COGS Required'],
            'COGS_Prcentage' => ['COGS Prcentage Required'],
            'Yield_Prcentage' => ['Yield Prcentage Required'],
            'Ideal_Gross_Selling_Price' => ['Ideal Gross Selling Price Required'],
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
