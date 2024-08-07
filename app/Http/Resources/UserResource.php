<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'whatsapp_number' => $this->whatsapp_number,
            'dl_number' => $this->dl_number,
            'gst_number' => $this->gst_number,
            'pan_number' => $this->pan_number,
            'aadhar_number' => $this->aadhar_number,
            'aadhar_image_front' => $this->aadhar_image_front,
            'aadhar_image_back' => $this->aadhar_image_back,
            'profile_image' => $this->profile_image,
            'dl_image' => $this->dl_image,
            'rc_number' => $this->rc_number,
            'rc_image' => $this->rc_image,
            'father_name' => $this->father_name,
            'address' => $this->address,
            'dob' => $this->dob,
            'gender' => $this->gender,
        ];
    }
}
