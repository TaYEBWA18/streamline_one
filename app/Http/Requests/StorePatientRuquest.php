<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRuquest extends FormRequest
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
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:10',
            'phone_number' => 'required',
            'email' => 'required|',
            'gender' => 'required',
            'nin' => 'required',
            'date_of_birth' => 'required',
            'marital_status' => 'required',
            'next_of_kin' => 'required',
            'nok_phone_number'=>'required',
            'relationship'=>'required',

        ];
    }
    public function messages(): array{
        return [
                    'first_name.required' => 'First name is compulsory',
                    'first_name.max'=>'First name must be less than 5 characters',
                    'last_name.required' => 'Last name is required',
                    'phone_number.required' => 'Phone number is required',
                    'email.required' => 'Email is required',
                    'gender.required' => 'Gender is required',
                    'nin.required' => 'National ID number is required',
                    'date_of_birth.required' => 'Date of birth is required',
                   'marital_status.required' => 'Marital status is required',
                    'next_of_kin.required' => 'Next of kin name is required',
                    'nok_phone_number.required' => 'Next of kin phone number is required',
                   'relationship.required' => 'Relationship is required',
                ];
    }
}
