<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallCenterClient extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'created_time',
        'ad_id',
        'ad_name',
        'adset_id',
        'adset_name',
        'campaign_id',
        'campaign_name',
        'form_id',
        'form_name',
        'is_organic',
        'platform',
        'phone_number',
        'email',
        'street_address',
        'full_name',
        'first_name',
        'last_name',
        'status',
        'observations',
        'available'
    ];
}