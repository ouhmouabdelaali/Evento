<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes

class Event extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'category_id',
        'seats_available',
        'image', 
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
