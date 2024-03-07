<?php

namespace Database\Factories;

use App\Models\Event;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model factory.
     *
     * @return Factory
     */
    public function definition(): Factory
    {
        return $this->state(function (Faker $faker) {
            $categoryIds = range(1, 3); // Assuming you have 3 categories with IDs 1 to 3

            return [
                'title' => $faker->sentence(words: 4),
                'description' => $faker->paragraph(sentences: 3),
                'date' => $faker->dateTimeBetween('+1 week', '+1 month'),
                'location' => $faker->address,
                'category_id' => $faker->randomElement($categoryIds),
                'seats_available' => $faker->numberBetween(10, 100),
                'address_id' => null, // Or use the address factory if applicable
            ];
        });
    }
}
