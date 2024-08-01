<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'vehicle_type_id' => $this->vehicle_type_id,
            'vehicle_model' => $this->vehicle_model,
            'vehicle_number' => $this->vehicle_number,
            'fuel_type' => $this->fuel_type,
            'rc_number' => $this->rc_number,
            'rc_image_front' => $this->rc_image_front,
            'rc_image_back' => $this->rc_image_back,
            'insurance_number' => $this->insurance_number,
            'insurance_image' => $this->insurance_image,
            'fitness_certificate_number' => $this->fitness_certificate_number,
            'seat_capacity' => $this->seat_capacity,
            'vehicle_name' => $this->vehicle_name,
            'vehicle_color' => $this->vehicle_color,
            'vehicle_permit_image' => $this->vehicle_permit_image,
            'vehicle_permit_number' => $this->vehicle_permit_number,
        ];
    }
}
