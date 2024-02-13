<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'faq',
        'thumbnail2',
        'thumbnail',
        'poster',
        'images',
        'video_link',
        'venue',
        'address',
        'city',
        'state',
        'zipcode',
        'country_id',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'repetitive',
        'featured',
        'status',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'category_id',
        'user_id',
        'add_to_facebook',
        // Diğer sütunları da ekleyebilirsiniz.
    ];
}
