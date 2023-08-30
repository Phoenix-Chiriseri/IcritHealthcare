<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MySupportPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'patient_id',
        'user_id',
        'comm_skills',
        'friend_fam',
        'mobility_dexterity',
        'routines_personal_care',
        'needs',
        'emotions',
        'daily_living_skills',
        'general_health_needs',
        'medication_support',
        'recreation_and_relation',
        'eating_drinking_nutrition',
        'psychological_support',
        'finance',
        'staff_email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
