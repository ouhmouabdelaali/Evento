<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event; // Replace with your event model path
use Faker\Factory as FakerFactory;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $faker = FakerFactory::create();

    //     for ($i = 0; $i < 50; $i++) { // Adjust the number of events as needed
    //         $categoryIds = range(1, 3); // Assuming you have 3 categories with IDs 1 to 3
    //         $categoryId = $faker->randomElement($categoryIds);

    //         Event::create([
    //             'title' => $faker->sentence(words: 4),
    //             'description' => $faker->paragraph(sentences: 3),
    //             'date' => $faker->dateTimeBetween('+1 week', '+1 month'),
    //             'location' => $faker->address,
    //             'category_id' => $categoryId,
    //             'seats_available' => $faker->numberBetween(10, 100),
    //             'address_id' => null, // Or use faker to generate an address_id if applicable
    //         ]);
    //     }
    // }
    public function run()
{
    Event::factory()->count(50)->create(); // Create 50 events using the factory
}

}
