<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ticket; // Replace with your ticket model path
use Faker\Factory as FakerFactory;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $faker = FakerFactory::create();

    //     for ($i = 0; $i < 100; $i++) { // Adjust the number of tickets as needed
    //         $eventId = rand(1, 50); // Assuming you have 50 events with IDs 1 to 50

    //         Ticket::create([
    //             'prix' => $faker->numberBetween(10, 100), // Generate ticket price between 10 and 100
    //             'event_id' => $eventId,
    //             'type' => $faker->randomElement(['General Admission', 'VIP', 'VIP Plus']),
    //             'ticket_code' => strtoupper(uniqid()), // Generate unique ticket code
    //             'contiter' => $faker->numberBetween(1, 10), // Generate ticket quantity between 1 and 10
    //         ]);
    //     }
    // }
    public function run()
{
    Ticket::factory()->count(100)->create();
}

}
