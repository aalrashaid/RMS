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
            'NameBrand' => ['required'],
            'Description' => ['required'],
            'BrandLogs' => ['required'],
            'Address' => ['required'],
            'ZipCode' => ['required'],
            'City' => ['required'],
            'Province' => ['required'],
            'Region' => ['required'],
            'Country' => ['required'],
            'Moblie' => ['required'],
            'Whatsapp' => ['required'],
            'Email' => ['required'],
            'Web' => ['required'],
            'Facebook' => ['required'],
            'Youtube' => ['required'],
            'Instagram' => ['required'],
            'Twitter' => ['required'],
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
            'NameBrand.required' => 'A NameBrand is required',
            'Description.required' => 'A Description is required',
            'BrandLogas.required' => 'A Brand Loga is required',
            'Address.required' => 'A Address is required',
            'ZipCode.required' => 'A ZipCode is required',
            'City.required' => 'A City is required',
            'Province.required' => 'A Province is required',
            'Region.required' => 'A Region is required',
            'Country.required' => 'A Country is required',
            'Moblie.required' => 'A Moblie is required',
            'Whatsapp.required' => 'A Whatsapp is required',
            'Email.required' => 'A Email is required',
            'Web.required' => 'A Web is required',
            'Facebook.required' => 'A Facebook is required',
            'Youtube.required' => 'A Youtube is required',
            'Instagram.required' => 'A Instagram is required',
            'Twitter.required' => 'A Twitter is required',
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
