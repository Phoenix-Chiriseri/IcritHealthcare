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
        'shift',
        'personal_care',
        'medication_admin',
        'appointments',
        'activities',
        'incident',
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
