<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = [
        'full_name',
        'date_of_birth',
        'mobile_number',
        'email'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

}
