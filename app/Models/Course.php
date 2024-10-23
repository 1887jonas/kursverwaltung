<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'location', 'date', 'time', 'max_participants', 'available_seats'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
