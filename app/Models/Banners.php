<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "title",
        "subtitle",
        "image",
        "status",
        "created_at",
        "updated_at",
        "order",
        "button_url",
        "button_title",
    ];

}
