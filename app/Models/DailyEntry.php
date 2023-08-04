<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_name',
        'assessment_date',
        'nhs_number',
        'patient_name',
        'user_name_first',
        'user_name_last',
        'address_street',
        'address_line_2',
        'address_city',
        'address_state',
        'address_zip',
        'address_country',
        'phone',
        'communication_language',
        'house'
    ];
}
