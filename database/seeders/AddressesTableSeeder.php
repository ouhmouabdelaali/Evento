<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Address; // Replace with your address model path
use Faker\Factory as FakerFactory;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // public function run()
    // {
    //     $faker = FakerFactory::create();

    //     for ($i = 0; $i < 50; $i++) { // Adjust the number of addresses as needed
    //         Address::create([
    //             'street' => $faker->streetAddress,
    //             'city' => $faker->city,
    //             'state' => $faker->stateAbbr,
    //             'postal_code' => $faker->postcode,
    //             'country' => $faker->countryCode,
    //         ]);
    //     }
    // }
    public function run()
{
    Address::factory()->count(50)->create();

}

}