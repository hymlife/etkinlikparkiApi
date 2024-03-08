<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{

    use HasFactory;
    protected $fillable = [
        'id',
        'seatchard_id',
        'ticket_id',
        'event_id',
        'status',
        'coordinates',
        'name',
        'name',
        'created_at',
        'updated_at',
        'mark',
        'ttl',
        'sessionmdx',
        'full_show',

    ];
}
