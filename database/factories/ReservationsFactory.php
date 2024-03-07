<?php

namespace Database\Factories;

use App\Models\Reservation;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
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
                'user_id' => rand(1, 50), // Assuming you have 50 users
                'status' => $faker->randomElement(['pending', 'confirmed', 'cancelled']),
            ];
        });
    }
}
