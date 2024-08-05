<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;

class userCreateRequest extends FormRequest
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
            'name'=>"required",
            'email'=>"required|unique:users,email",
            'password'=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",
            'phone'=>"required",
            // 'date_of_birth'=>"required",
            'gender'=>"required",
        ];
    }
    public function messages(): array{
        return [
            'name.required'=>"Name is required",
            'email.required'=>"Email is required",
            'email.unique'=>"Email already exists",
            'password.required'=>"Password is required",
            'password.min'=>"Password must be at least 8 characters long",
            'password.regex'=>"Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character",
            'phone.required'=>"Phone number is required",
            // 'date_of_birth.required'=>"Date of birth is required",
            'gender.required'=>"Gender is required",
        ];  
    }
    }

