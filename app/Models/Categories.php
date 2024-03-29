<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'slug',
        'created_at',
        'updated_at',
        'status',
        'thumb',
        'image',
        'template',
        'category_id'
    ];

}
