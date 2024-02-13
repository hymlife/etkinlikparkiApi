<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'quantity',
        'description',
        'event_id',
        'status',
        'customer_limit',
        't_soldout',
        'sale_start_date',
        'sale_end_date',
        'sale_price',
        'is_donation',
        'studentPrice',
        'start_date',
        'end_date',
        'isStudentPrice',
    ];

    protected $casts = [
        'sale_start_date' => 'datetime',
        'sale_end_date' => 'datetime',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];
}
