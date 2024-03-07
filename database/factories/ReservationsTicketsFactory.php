<?php

namespace Database\Factories;

use App\Models\ReservationTicket;
use App\Models\Ticket;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationTicketFactory extends Factory
{
    /**
     * Define the model factory.
     *
     * @return Factory
     */
    public function definition(): Factory
    {
        return $this->state(function (Faker $faker) {
            $reservationId = rand(1, 50); // Assuming you have 50 reservations
            $availableTickets = Ticket::where('contiter', '>', 0)->pluck('id'); // Get available tickets

            if ($availableTickets->isEmpty()) {
                // Handle the case where no tickets are available (e.g., throw an exception, log a message, etc.)
                return;
            }

            $ticketId = $faker->randomElement($availableTickets->toArray());

            return [
                'ticket_id' => $ticketId,
                'reservation_id' => $reservationId,
            ];
        });
    }
}
