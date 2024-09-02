<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vehicle_id',
        'pickup_location',
        'drop_location',
        'pickup_coordinates',
        'drop_coordinates',
        'pickup_time',
        'pickup_date',
        'amount',
    ];
}
