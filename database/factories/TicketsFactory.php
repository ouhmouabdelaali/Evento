<?php

namespace Database\Factories;

use App\Models\Ticket;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model factory.
     *
     * @return Factory
     */
    public function definition(): Factory
    {
        return $this->state(function (Faker $faker) {
            return [
                'prix' => $faker->numberBetween(10, 100),
                'event_id' => rand(1, 50), // Assuming you have 50 events
                'type' => $faker->randomElement(['General Admission', 'VIP', 'VIP Plus']),
                'ticket_code' => strtoupper(uniqid()),
                'contiter' => $faker->numberBetween(1, 10),
            ];
        });
    }
}
