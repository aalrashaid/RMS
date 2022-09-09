<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandsRequest extends FormRequest
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
            //'cuisine_id' => ['required', 'integer', 'exists:cuisines,id'],
            //'category_id' => ['required', 'integer', 'exists:categories,id'],
            //'thumbnail_id' => ['required', 'file', 'max:10240', 'mimes:jpg,jpeg,png,bmp,tiff'],

            'Brand_UID' => ['required', 'unique:Brands,Brand_UID', 'min:5', 'max:255',],
            'Name_Brand' => ['required', 'unique:Brands,Name_Brand', 'min:5', 'max:255',],
            'Description' => ['required', 'min:5', 'max:280',],
            'Brand_Loga' => [
                'required', 'image',
                /**'size:5120',*/
                'mimes:jpeg,png,jpg,'
            ],

            'Address' => ['required', 'min:5', 'max:255',],
            'City' => ['required', 'min:5', 'max:255',],
            'State' => ['required', 'min:5', 'max:255',],
            'Zip_Code' => ['required', 'min:5', 'max:10',],
            'Country' => ['required', 'min:5', 'max:255',],
            'Moblie' => ['required', 'digits:10', 'min:7', 'max:12',],
            'Whatsapp' => ['required', 'digits:10', 'min:7', 'max:12',],
            'Email' => ['required', 'email', 'unique:Brands,Email', 'min:7', 'max:155',],
            'Web' => ['nullable'],
            'Facebook' => ['nullable'],
            'Youtube' => ['nullable'],
            'Instagram' => ['nullable'],
            'Twitter' => ['nullable'],

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

            'Name_Brand' => ['A Name Brand is required'],
            'Description' => ['A Name Description is required max 280'],
            'Brand_Loga' => ['A Name Brand_Loga is required max 5 MB'],
            'Address' => ['A Address is required'],
            'City' => ['A Name of City is required'],
            'State' => ['A Name of State is required'],
            'Zip_Code' => ['A Zip Code is required'],
            'Country' => ['A Name of Country is required'],
            'Moblie' => ['A Name of Country is required'],
            'Whatsapp' => ['A Name of Country is required'],
            'Email' => ['A Name of Country is required'],
            'Web' => ['A Address of Web is required'],
            'Facebook' => ['A Account of Facebook Business is required'],
            'Youtube' => ['A Account of Youtube Business is required'],
            'Instagram' => ['A Account of Instagram Business is required'],
            'Twitter' => ['A Account of Twitter Businessis required'],
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
        ];
    }
}
