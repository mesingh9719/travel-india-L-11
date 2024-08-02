<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $casts = [
        'start_latitude_longitude' => 'json',
        'end_latitude_longitude' => 'json',
    ];
    protected $fillable = 
    [
        'user_id',
        'vehicle_id',
        'start_trip',
        'end_trip',
        'start_latitude_longitude',
        'end_latitude_longitude',
        'date',
        'time'  
    ];

 
}
