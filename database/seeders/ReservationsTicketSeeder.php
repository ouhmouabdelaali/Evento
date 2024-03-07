<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReservationTicket; 
use App\Models\Role;
use App\Models\Ticket;
use Faker\Factory as FakerFactory;

class ReservationTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $faker = FakerFactory::create();

    //     for ($i = 0; $i < 50; $i++) { // Adjust the number of reservations_tickets as needed
    //         $reservationId = rand(1, 50); // Assuming you have 50 reservations
    //         $ticketId = rand(1, 100); // Assuming you have 100 tickets

    //         // Ensure ticket IDs don't exceed the available quantity in the tickets table
    //         $ticket = Ticket::find($ticketId);
    //         if ($ticket && $ticket->contiter > 0) {
    //             $reservationTicket = ReservationSeeder::create([
    //                 'ticket_id' => $ticketId,
    //                 'reservation_id' => $reservationId,
    //             ]);

    //             // Decrement the ticket quantity in the tickets table after successful creation
    //             $ticket->decrement('contiter');
    //         }
    //     }
    // }
    
public function run()
{
    ReservationTicket::factory()->count(50)->create(); 
}

}
