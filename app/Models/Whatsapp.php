<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Whatsapp extends Model
{
    protected $fillable = [
        'ip',
        'city',
        'local',
        'region',
        'country',
        'zip_code',
        'product_id',
        'social_network_id'
    ];
}
