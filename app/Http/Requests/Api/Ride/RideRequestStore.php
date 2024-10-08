<?php

namespace App\Http\Requests\Api\Ride;

use Illuminate\Foundation\Http\FormRequest;

class RideRequestStore extends FormRequest
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
            'pickup_location' => 'required|string',
            'drop_location' => 'required|string',
            'pickup_coordinates' => 'nullable',
            'drop_coordinates' => 'nullable',
            'pickup_date' =>    'required',
            'pickup_time' => 'required',
            'amount' => 'required'
        ];
    }
}
