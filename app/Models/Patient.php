<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'nin',
        'date_of_birth',
        'marital_status',
        'phone_number',
        'email',
        'next_of_kin',
        'nok_phone_number',
        'relationship',
        
        
        
    ];

    use HasFactory;
}
