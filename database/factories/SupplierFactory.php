<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Countries;
use App\Models\Thumbnails;

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
            'User_id' => User::all()->fake()->random()->id,
            'Countries_id' => Countries::all()->fake()->random()->id,
            'Thumbnail_Id' => $this->faker->numberBetween($min = 1, $max = 5),

            'Slug' => $this->faker->slug(),
            'Supplier_UID' =>  $this->faker->numberBetween($min = 1, $max = 9000),
            //'Name_Supplier',
            'Company_Name' =>  $this->faker->company(),
            //'Brand_Logo',
            'Address' => $this->faker->address(),
            'City' => $this->faker->city(),
            'State' => $this->faker->state(),
            'Zip_Code' => $this->faker->postcode(),
            //'Country',
            //'Country',
            'Moblie' => $this->faker->phoneNumber(),
            'Whatsapp' => $this->faker->phoneNumber(),
            'Email' => $this->faker->companyEmail(),
            'Web' => $this->faker->url(),
            'Facebook' => $this->faker->url(),
            'Youtube' => $this->faker->url(),
            'Instagram' => $this->faker->url(),
            'Twitter' => $this->faker->url(),
        ];
    }
}
