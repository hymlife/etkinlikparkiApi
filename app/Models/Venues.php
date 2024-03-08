<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'venue_type',
        'amenities',
        'slug',
        'seated_guestnumber',
        'standing_guestnumber',
        'neighborhoods',
        'pricing',
        'availability',
        'food',
        'show_quoteform',
        'contact_email',
        'address',
        'city',
        'country_id',
        'state',
        'zipcode',
        'glat',
        'glong',
        'images',
        'organizer_id',
        'status',
        'created_at',
        'updated_at',
    ];


}
