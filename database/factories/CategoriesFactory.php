<?php

namespace Database\Factories;

use App\Models\Category;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
                'name' => $faker->unique()->word,
            ];
        });
    }
}
