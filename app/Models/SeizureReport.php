<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeizureReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref_number',
        'patient_id',
        'location',
        'date_of_incident',
        'time_of_incident',
        'change_of_mood',
        'restlessness',
        'sensations',
        'sound',
        'other', // This corresponds to the first "other" field group
        'standing',
        'sitting',
        'in_bed',
        'unobserved_seizure',
        'other_body_parts', // This corresponds to the second "other" field group
        'did_fall',
        'initials_of_harm',
        'incident_description',
        'any_causes_to_incident',
        'any_other_forms',
        'did_stiffen',
        'did_not_stiffen',
        'loss_of_consciousness',
        'no_loss_of_consciousness',
        'colour_change',
        'no_colour_change',
        'movement',
        'no_movement',
        'breathing_difficulty',
        'no_breathing_difficulty',
        'yes_incontinence',
        'no_incontinence',
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
