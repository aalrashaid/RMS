<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'User_id',
            'Thumbnail_Id',
            'Countries_id',
            'Slug',
            'Supplier_UID',
            //'Name_Supplier',
            'Company_Name',
            //'Brand_Logo',
            'Address',
            'City',
            'State',
            'Zip_Code',
            //'Country',
            //'Country',
            'Moblie',
            'Whatsapp',
            'Email',
            'Web',
            'Facebook',
            'Youtube',
            'Instagram',
            'Twitter',
        ];
    }
}
