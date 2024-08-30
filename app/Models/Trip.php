<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'pickup_location',
        'drop_location',
        'start_latitude_longitude',
        'end_latitude_longitude',
        'date',
        'time',
        'price'
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
