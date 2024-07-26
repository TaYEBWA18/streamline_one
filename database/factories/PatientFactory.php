<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'first_name'=>fake()->firstName(),
        'last_name'=>fake()->lastName(),
        'gender'=>fake()->randomElement(['M','F']),
        'nin'=>'CF'.fake()->regexify('/[0-9 A-Z]{12}$/'),
        'date_of_birth'=>fake()->date(),
        'marital_status'=>fake()->randomElement(['1','2','3','4']),
        'phone_number'=>fake()->text('11'),
        'email'=>fake()->email(),
        'next_of_kin'=>fake()->name(),
        'nok_phone_number'=>fake()->text('11'),
        'relationship'=>fake()->randomElement(['1','2','3', '4', '5']),
        
        ];
    }
}
