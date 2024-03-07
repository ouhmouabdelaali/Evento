<?php

namespace Database\Factories;

use App\Models\Role; // Replace with your role model path
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model factory.
     *
     * @return Factory
     */
    public function definition(): Factory
    {
        $predefinedRoles = ['admin', 'organizers', 'participant'];

        return $this->state(function (Faker $faker) use ($predefinedRoles) {
            return [
                'name' => $faker->unique()->randomElement($predefinedRoles), // Choose from predefined roles
            ];
        });
    }
}
