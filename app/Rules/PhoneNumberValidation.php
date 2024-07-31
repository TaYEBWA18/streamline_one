<?php

namespace App\Rules;

use Closure;

use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumberValidation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $phone_number = str_split($value);

        if($phone_number[2]=='3'){
            $fail('The :attribute   073 format is invalid.');
        }
    }
}
