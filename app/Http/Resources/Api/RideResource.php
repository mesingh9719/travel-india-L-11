<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RideResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'pickup_location' => $this->pickup_location,
            'drop_location' => $this->drop_location,
            'pickup_coordinates' => $this->pickup_coordinates,
            'drop_coordinates' => $this->drop_coordinates,
            'pickup_time' => $this->pickup_time,
            'pickup_date' => $this->pickup_date,
            'amount' => $this->amount,
            'trip_status' => $this->trip_status,
        ];
    }
}
