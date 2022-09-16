<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Countries;
use App\Models\Category;
use App\Models\Cuisine;
use Cviebrock\EloquentSluggable\Services\SlugService;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brands>
 */
class BrandsFactory extends Factory
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
        'user_id'=> User::all()->random()->id,

        //'Countries_id' =>  $this->faker->numberBetween($min = 1, $max = 4),
        'Countries_id' => Countries::all()->random()->id,
       // 'Cuisine_id' => $this->faker->numberBetween($min = 1, $max = 5) ,
       'Cuisine_id' => Cuisine::all()->random()->id,
        //'Thumbnail_Id' => $this->faker->numberBetween($min = 1, $max = 5),

        'Slug' => $this->faker->slug(), //This fixed the (SlugService) calls for Models later,
        'Brand_UID' => $this->faker->numberBetween($min = 1, $max = 9000),
        'Name_Brand'=> $this->faker->company(),
        'Description'=> $this->faker->paragraph($nbSentences = 1, $variableNbSentences = true),
        'Address'=> $this->faker->address(),
        'City'=> $this->faker->city(),
        'State'=> $this->faker->state(),
        'Zip_Code'=> $this->faker->postcode(),
        'Moblie'=> $this->faker->phoneNumber(),
        'Whatsapp'=> $this->faker->tollFreePhoneNumber(),
        'Email'=> $this->faker->companyEmail(),
        'Web'=> $this->faker->url(),
        'Facebook'=> $this->faker->url(),
        'Youtube'=> $this->faker->url(),
        'Instagram'=> $this->faker->url(),
        'Twitter'=> $this->faker->url(),
        ];
    }
}
