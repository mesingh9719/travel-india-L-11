<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegistrationRequest extends FormRequest
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
            'user_type_id' => 'required|exists:user_types,id',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'mobile' => 'required|string|min:10|max:10|unique:users,mobile',
            'email' => 'required|email|unique:users',
            'whatsapp_number'=>'required|string|min:10|max:10|unique:users,whatsapp_number',
            'dl_number'=>'required',
            'gst_number'=>'required',
            'pan_number'=>'required',
            'aadhar_number'=>'required',
            'aadhar_image_front'=> 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'aadhar_image_back'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'profile_image'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'dl_image'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'rc_number'=>'required',
            'rc_image'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'father_name'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'gender'=>'required',
        ];
    }

}
