<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'vehicle_type_id' => 'required|exists:vehicle_types,id',
            'vehicle_number' => 'required|string',
            'vehicle_model' => 'required|string',
            'fuel_type' => 'required|string',
            'rc_number' => 'required|string',
            'rc_image_front' => 'required|mimes:jpeg,jpg,png|max:2048',
            'rc_image_back' => 'required|mimes:jpeg,jpg,png|max:2048',
            'insurance_number' => 'nullable|string',
            'insurance_image' => 'nullable|mimes:jpeg,jpg,png|max:2048',
            'fitness_certificate_number' => 'nullable|string',
            'seat_capacity' => 'required|integer',
            'vehicle_name' => 'required|string',
            'vehicle_color' => 'required|string',
            'vehicle_permit_image' => 'required|mimes:jpeg,jpg,png|max:2048',
            'vehicle_permit_number' => 'required|string',
        ];
    }
}
