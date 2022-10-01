<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thumbnails>
 */
class ThumbnailsFactory extends Factory
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
            //'Brands_id'=>$this->faker->numberBetween($min = 1000, $max = 9000) ,
            //'User_id'=>$this->faker->numberBetween($min = 1, $max = 35) ,
            'File_Name'=>$this->faker->imageUrl(), //$width, $height, 'cats'
            //'File_Size'=>$this->faker->numberBetween($min = 1000, $max = 9000),
            //'File_Path'=>$this->faker->file(),//$sourceDir, $targetDir, false
        ];
    }
}
