<?php

namespace App\Rules;

use  App\Http\Requests\StorePatientRuquest;
use App\Models\Patient;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NinValidation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $nin=str_split($value);//pick the value

        $dob=request()->input('date_of_birth');

        $gender=request()->input('gender');
        //  dd($dob, $gender);

        $year_of_birth=str_split($dob);

        // dd( $nin[1], $nin,$dob, $year_of_birth);
    
        if ($nin[0] !="C"){
            $fail('The: attribute NIN number must start with a C');
        }
        elseif($nin[1] !="F" && $nin[1] !="M"){
            $fail('The: attribute NIN number must start with CM or CF');
        }
        elseif($year_of_birth[2] !=$nin[2] && $year_of_birth[3] != $nin[3]){
            $fail('The: attribute NIN number error');
        }
        elseif($gender=='F' && $nin[1]!="F"){
            $fail('The: attribute NIN number error');
        }
        elseif($gender=='M' && $nin[1]!="M"){
                    $fail('The: attribute NIN number error');
                }
     
        // ****************************************************************
        // elseif ($nin[1] !="M"){
        //     $fail('The: attribute NIN number must start with CM or CF');
        // }
        // ****************************************************************
    }
}
