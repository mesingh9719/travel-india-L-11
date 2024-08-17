<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankDetailsRequestStore extends FormRequest
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
                'account_holder_name'=>'nullable',
                'account_number'=>'nullable',
                'ifsc_code'=>'nullable',
                'bank_name'=>'nullable',
                'branch_name'=>'nullable',
        ];
    }
}
