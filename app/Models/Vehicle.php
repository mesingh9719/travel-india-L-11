<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{

    protected $fillable = [
        'user_id',
        'vehicle_number',
        'vehicle_type_id',
        'vehicle_model',
        'fuel_type',
        'rc_number',
        'rc_image_front',
        'rc_image_back',
        'insurance_number',
        'insurance_image',
        'fitness_certificate_number',
        'seat_capacity',
        'vehicle_name',
        'vehicle_color',
        'vehicle_permit_image',
        'vehicle_permit_number',
        'is_verified',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function vehicleType(): BelongsTo
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function assignedTo(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

}
