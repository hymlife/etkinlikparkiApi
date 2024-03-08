<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'customer_id',
        'organiser_id',
        'event_id',
        'ticket_id',
        'quantity',
        'price',
        'tax',
        'net_price',
        'status',
        'created_at',
        'updated_at',
        'event_title',
        'event_start_date',
        'event_end_date',
        'event_start_time',
        'event_end_time',
        'event_repetitive',
        'ticket_title',
        'ticket_price',
        'event_category',
        'booking_cancel',
        'booking_cancel_date',
        'item_sku',
        'order_number',
        'transaction_id',
        'customer_name',
        'customer_tc',
        'customer_phone',
        'customer_email',
        'currency',
        'checked_in',
        'payment_type',
        'is_paid',
        'is_bulk',
        'promocode_id',
        'promocode',
        'pos_id',
        'bulk_code',
        'scanner_id',
        'common_order',
        'promocode_reward',
        'review_mail',
        'service',
        'children_count',
        'student',
        'is_guest',
    ];
}
