<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleImageRequest extends FormRequest
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
            'vehicle_image.*' => 'nullable|mimes:jpeg,jpg,png|max:2048',
        ];
    }


    public function messages()
    {
        return [
            'vehicle_image.*.required' => 'Please upload a front image for the RC.',
            'vehicle_image.*.image' => 'The file must be an image.',
            'vehicle_image.*.mimes' => 'Only JPEG, PNG, and JPG images are allowed.',
            'vehicle_image.*.max' => 'The image size must not exceed 2MB.',
        ];
    }
}
