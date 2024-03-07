<?php

namespace Database\Factories;

use App\Models\Address;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
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
                'street' => $faker->streetAddress,
                'city' => $faker->city,
                'state' => $faker->stateAbbr,
                'postal_code' => $faker->postcode,
                'country' => $faker->countryCode,
            ];
        });
    }
}
