<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class TripRequestStore extends FormRequest
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
            'vehicle_id' => 'required|exists:vehicles,id',
            'start_trip'=>'required',
            'end_trip'=>'required',
            'start_latitude'=>'required',
            'start_longitude'=>'required',
            'end_latitude'=>'required',
            'end_longitude'=>'required',
            'date'=>'required',
            'time'=>'required',
        ];
    }
}
