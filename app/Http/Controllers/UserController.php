<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


//     public function createReservation(, int $eventId): Reservation
// {


//     return $reservation;
// }

     public function reservation($eventId)
     { 

        $userId=Auth::id();
        $reservation = new Reservation;
        $reservation->user_id = $userId;
        // $reservation->event_id = $eventId;
        $reservation->status = 'valid'; 
        $reservation->save();
         
     }

     public function gnerer_ticket()
     {

     }
}
