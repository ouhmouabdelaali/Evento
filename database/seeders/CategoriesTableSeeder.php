<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Replace with your category model path
use Faker\Factory as FakerFactory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $faker = FakerFactory::create();

    //     for ($i = 0; $i < 10; $i++) { // Adjust the number of categories as needed
    //         Category::create([
    //             'name' => $faker->unique()->word,
    //         ]);
    //     }
    // }
    public function run()
{
    Category::factory()->count(10)->create(); // Create 10 categories using the factory
}

}
