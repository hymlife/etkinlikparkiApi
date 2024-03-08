<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTemp extends Model
{

    use HasFactory;

    protected $table = 'bookingtemp';

    protected $fillable = [
        'id',
        'event_id',
        'seat_id',
        'ticket_id',
        'booking_date',
        'booking_time',
        'sessionx',
        'sessionx1',
        'timex',
        'timeexp',
    ];
}
