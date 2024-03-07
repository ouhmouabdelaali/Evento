<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation; // Replace with your reservation model path
use Faker\Factory as FakerFactory;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $faker = FakerFactory::create();

    //     for ($i = 0; $i < 50; $i++) { // Adjust the number of reservations as needed
    //         Reservation::create([
    //             'user_id' => rand(1, 50), // Assuming you have 50 users with IDs 1 to 50
    //             'status' => $faker->randomElement(['pending', 'confirmed', 'cancelled']),
    //         ]);
    //     }
    // }
    public function run()
{
    Reservation::factory()->count(50)->create(); // Create 50 reservations using the factory
}

}
