<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'Supplier_UID' => ['required'],
            'Name_Supplier' => ['required'],
            'Company_Name' => ['required'],
            'Brand_Logo' => ['required'],
            'Street' => ['required'],
            'Zip_Code' => ['required'],
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
            //
            'Supplier_UID.required' => ['Supplier UID Required'],
            'Name_Supplier.required' => ['Name Supplier Required'],
            'Company_Name.required' => ['Company Name Required'],
            'Brand_Logo.required' => ['Brand Logo Required'],
            'Street.required' => ['Street Required'],
            'Zip_Code.required' => ['Zip Code Required'],
            'City.required' => ['City Required'],
            'Province.required' => ['Province Required'],
            'Region.required' => ['Region Required'],
            'Country.required' => ['Country Required'],
            'Moblie.required' => ['Moblie Required'],
            'Whatsapp.required' => ['Whatsapp Required'],
            'Email.required' => ['Email Required'],
            'Web.required' => ['Web Required'],
            'Facebook.required' => ['Facebook Required'],
            'Youtube.required' => ['Youtube Required'],
            'Instagram.required' => ['Instagram Required'],
            'Twitter.required' => ['Twitter Required'],

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
