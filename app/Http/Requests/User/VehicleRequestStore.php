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
            'user_id.*' => 'required|exists:users,id',
            'vehicle_type_id.*' => 'nullable|exists:vehicle_types,id',
            'vehicle_number.*' => 'nullable|string',
            'vehicle_model.*' => 'nullable|string',
            'fuel_type.*' => 'nullable|string',
            'rc_number.*' => 'nullable|string',
            'rc_image_front.*' => 'nullable|mimes:jpeg,jpg,png|max:2048',
            'rc_image_back.*' => 'nullable|mimes:jpeg,jpg,png|max:2048',
            'insurance_number.*' => 'nullable|string',
            'insurance_image.*' => 'nullable|mimes:jpeg,jpg,png|max:2048',
            'fitness_certificate_number.*' => 'nullable|string',
            'seat_capacity.*' => 'nullable|integer',
            'vehicle_name.*' => 'nullable|string',
            'vehicle_color.*' => 'nullable|string',
            'vehicle_permit_image.*' => 'nullable|mimes:jpeg,jpg,png|max:2048',
            'vehicle_permit_number.*' => 'nullable|string',
        ];
    }
}
