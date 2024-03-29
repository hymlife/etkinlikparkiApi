<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
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
        'created_at',
        'updated_at',
        'slug',
        'price_type',
        'latitude',
        'longitude',
        'item_sku',
        'publish',
        'is_publishable',
        'merge_schedule',
        'online_location',
        'seatingchart_image',
        'excerpt',
        'offline_payment_info',
        'youtube_embed',
        'vimeo_embed',
        'event_password',
        'e_admin_commission',
        'short_url',
        'currency',
        'e_soldout',
        'show_reviews',
        'is_private',
        'currency_id',
        'direct_registration',
        'is_age',
        'is_company',
        'is_title',
        'is_tc',
        'is_passport',
        'point',
        'is_point',
        'shorturl',
        'shorturlhost',
        'shortdone',
        'shortid',
        'is_tc_check',
        'min_age',
        'max_age',
        'gander',
        'custom_sms_message',
        'location_check',
        'service',
        'gander_rule',
        'custom_is_free',
        'banned_list_id',
        'banned_event_ids',
        'created_banned_list',
        'is_offline_payment',
        'service_venue_ids',
        'isAnnouncement',
        'is_children',
        'favorite',
        'pin',
        'delete_lock',
        'sabit',


    ];
}
