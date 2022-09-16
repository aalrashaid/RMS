<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
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
            'User_Id',
            'Brands_Id',
            'Category_Id',
            'Thumbnail_Id',
            'Recipe_Cards_Id',
            'Name',
            'Slug',
            'Description',
            'Price',
        ];
    }
}
