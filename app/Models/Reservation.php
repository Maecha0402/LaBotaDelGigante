<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'first_name',
        'last_name',
        'email',
        'num_guests',
        'arrival_date',
        'arrival_time',
        'departure_date',
        'special_request',
        'status',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
