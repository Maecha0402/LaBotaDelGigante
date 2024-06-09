<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'additional_services',
        'image1',
        'image2',
        'image3',
    ];

    protected $casts = [
        'additional_services' => 'array',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

