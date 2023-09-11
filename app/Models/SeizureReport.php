<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeizureReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_number',
        'user_id',
        'patient_id',
        'location',
        'date_of_incident',
        'time_of_incident',
        'other_forms_1',
        'other_forms_2',
        'did_fall',
        'initials_of_harm',
        'incident_description',
        'any_causes_to_incident',
        'any_other_forms',
        'did_stiffen',
        'loss_of_consciousness',
        'colour_change',
        'movement',
        'breathing_difficulty',
        'parts',
        'how_long_seizure',
        'yes_incontinence',
        'condition_after_seizure',
        'recovery_date',
        'person_injury',
        'treatment',
        'triggers',
        'reported_by',
        'report_date',
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
