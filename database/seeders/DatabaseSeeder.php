<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([

            // CuisinesSeeder::class,
            CategorySeeder::class,
            CountriesSeeder::class,
            GendersSeeder::class,
            currencySeeder::class,
            LanguagesSeeder::class
        ]);

        // $this->command->info('Cuisine Seeder table seeded !,  created successfully.');
        $this->command->info('Category Seeder table seeded!,  created successfully.');
        $this->command->info('Country Seeder table seeded!,  created successfully.');
        $this->command->info('Currency Seeder table seeded!,  created successfully.');
        $this->command->info('Gender Seeder table seeded !,  created successfully.');
        $this->command->info('Language Seeder table seeded!,  created successfully.');
    }
}
