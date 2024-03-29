<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix',
        'event_id',
        'type',
        'ticket_code',
        'contiter',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function resevation()
    {
        return $this->belongsTo(Reservation::class);
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
