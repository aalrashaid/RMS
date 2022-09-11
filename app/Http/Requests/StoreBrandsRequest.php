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
            'Cuisine_id' => ['required', 'integer', 'exists:cuisines,id'],
            'Countries_id' => ['required', 'integer', 'exists:Countries_id,id'],
            'thumbnail_id' => ['required', 'file', 'max:10240', 'mimes:jpg,jpeg,png,bmp,tiff'],
            'Slug' => ['required','exists:Brands,Slug' ],
            'Brand_UID' => ['required', 'unique:Brands,Brand_UID', 'exists:Brands,Brand_UID','min:5', 'max:255',],
            'Name_Brand' => ['required', 'unique:Brands,Name_Brand', 'min:5', 'max:255',],
            'Description' => ['required', 'min:5', 'max:280',],
            'Address' => ['required', 'min:5', 'max:255',],
            'City' => ['required', 'min:5', 'max:255',],
            'State' => ['required', 'min:5', 'max:255',],
            'Zip_Code' => ['required', 'min:4', 'max:5',],
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
            'Cuisine_id.required' => ['A Name Cuisine is required'],
            'Countries_id.required' => ['A Name Country required'],
            'thumbnail_id.required' => ['A Brand Logo required'],
            'Name_Brand.required' => ['A Name Brand is required'],
            'Description.required' => ['A Name Description is required max 280'],
            'Brand_Loga.required' => ['A Name Brand_Loga is required max 5 MB'],
            'Address.required' => ['A Address is required'],
            'City.required' => ['A Name of City is required'],
            'State.required' => ['A Name of State is required'],
            'Zip_Code.required' => ['A Zip Code is required'],
            'Country.required' => ['A Name of Country is required'],
            'Moblie.required' => ['A Name of Country is required'],
            'Whatsapp.required' => ['A Name of Country is required'],
            'Email.required' => ['A Name of Country is required'],
            'Web.required' => ['A Address of Web is required'],
            'Facebook.required' => ['A Account of Facebook Business is required'],
            'Youtube.required' => ['A Account of Youtube Business is required'],
            'Instagram.required' => ['A Account of Instagram Business is required'],
            'Twitter.required' => ['A Account of Twitter Businessis required'],
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
