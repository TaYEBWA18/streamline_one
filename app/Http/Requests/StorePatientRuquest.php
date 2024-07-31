<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;
use App\Rules\PhoneNumberValidation;
use App\Rules\NinValidation;


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
            'phone_number' => new PhoneNumberValidation,
            // 'email' => 'required|email:rfc,dns|unique:users,email',
            'gender' => 'required',
            'nin' =>  new NinValidation,
            'date_of_birth' => 'required',
            'marital_status' => 'required',
            'next_of_kin' => 'required',
            // 'nok_phone_number' => 'required_if:next_of_kin,|regex:/^07[0-9]{8}$/',
            'relationship'=>'required',
            'patient_image' => 'sometimes|image',

        ];
    }
    public function messages(): array{
        return [
                    'first_name.required' => 'First name is compulsory',
                    'first_name.max'=>'First name must be less than 5 characters',
                    'last_name.required' => 'Last name is required',
                    // 'phone_number' => []
                        // 'required'=>'Phone Number is required'],
                        // 'regex:/^\07\d{9}$/' => 'The phone number must start with "07" and be 10 digits long.'],
                    'email.required' => 'Email is required',
                    'email.unique' => 'Email already exists. Please try a different email.',
                    'gender.required' => 'Gender is required',
                    // 'nin.required' => 'National ID number is required',
                    // 'nin.regex' => 'Invalid National ID format. Must start with CF or CM followed by 12 digits.',
                    'date_of_birth.required' => 'Date of birth is required',
                    'marital_status.required' => 'Marital status is required',
                    'next_of_kin.required' => 'Next of kin name is required',
                    'nok_phone_number' => [
                        'required'=>'Next of kin phone number is required',
                        'regex:/^07[0-9]{10}$/'=>'The phone number must start with "07" and be 10 digits long.'],
                   'relationship.required' => 'Relationship is required',
                   'patient_image'=>'Image is required',
                ];
    }


}
