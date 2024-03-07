<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationTickit extends Model
{
    protected $table = 'reservations_tickits';

    protected $fillable = [
        'ticket_id',
        'reservation_id',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
