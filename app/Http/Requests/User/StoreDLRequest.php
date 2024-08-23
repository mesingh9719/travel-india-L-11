<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreDLRequest extends FormRequest
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
            'dl_number' => 'required',
            'dl_image' => 'required|mimes:jpeg,jpg,png|max:2048',
        ];
    }


    public function messages()
    {
        return [
            'dl_image' => 'Please upload a front image for the RC.',
            'dl_image' => 'The file must be an image.',
            'dl_image' => 'Only JPEG, PNG, and JPG images are allowed.',
            'dl_image'  => 'The image size must not exceed 2MB.',
        ];
    }
}
