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
            'full_name' => 'required|string',
            'mobile' => 'required|min:10|max:10|unique:users,mobile',
            'alternate_Mobile'=>'nullable',
            'business_name'=>'nullable',
            'business_address'=>'nullable',
            'same_as_business'=>'nullable',
            'home_address'=>'required',
            'pan_number'=>'required',
            'aadhar_number'=> 'required',
            'dl_number'=>'required',
            'gst_number'=>'nullable',
            "business_state" =>'nullable',
            "business_city" =>'nullable',
            "business_zip" =>'nullable',
            "home_state" =>'required',
            "home_city" => 'required',
            "home_zip" =>'required',
            "same_as_business" =>'nullable',
            // 'rc_number'=>'required',
            'pan_image'=> 'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'aadhar_image_front'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'aadhar_image_back'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'dl_image'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'profile_image'=>'nullable|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            // 'rc_image'=>'required|image|mimes:jpeg,png,jpg,gif,pdf|max:2048'
        ];
    }

}
