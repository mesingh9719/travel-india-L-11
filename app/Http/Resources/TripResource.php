<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;
class TripResource extends JsonResource
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
        'user_id'=>$this->user_id,
        'vehicle_id' => $this->vehicle_id,
        'start_trip'=>$this->start_trip,
        'end_trip'=>$this->end_trip,
        'start_latitude_longitude' => json_decode($this->start_latitude_longitude),
        'end_latitude_longitude' => json_decode($this->end_latitude_longitude),
         'date' => Carbon::createFromFormat('Y-m-d', $this->date)->format('d-m-Y'),
        'time'=>Carbon::createFromFormat('H:i:s', $this->time),
    ];
    }
}
