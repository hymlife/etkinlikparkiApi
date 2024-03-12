<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'age',
        'company',
        'title',
        'tc',
        'passport',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'stripe_id',
        'pm_type',
        'pm_last_four',
        'trial_ends_at',
        'avatar',
        'settings',
        'role_id',
        'organisation',
        'bank_name',
        'bank_code',
        'bank_branch_name',
        'bank_branch_code',
        'bank_account_number',
        'bank_account_name',
        'bank_account_phone',
        'address',
        'phone',
        'status',
        'org_description',
        'org_facebook',
        'org_instagram',
        'org_youtube',
        'org_twitter',
        'mailchimp_apikey',
        'mailchimp_list_id',
        'stripe_account_id',
        'organizer_id',
        'taxpayer_number',
        'seller_name',
        'seller_info',
        'seller_tax_info',
        'seller_signature',
        'seller_note',
        'country',
        'user_point',
        'event_count',
        'birthday',
        'gender',
        'phone_verify',
        'phone_code'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'trial_ends_at' => 'datetime',
        'birthday' => 'date',
    ];
}
