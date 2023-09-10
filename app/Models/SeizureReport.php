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
        'other',
        'standing',
        'sitting',
        'in_bed',
        'unobserved_seizure',
        'other',
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
        'left_body_parts',
        'right_body_parts',
        'both_body_parts',
        'arms_body_parts',
        'legs_body_parts',
        'picking_body_parts',
        'eyelid_body_parts',
        'spasmodic_body_parts',
        'facial_body_parts',
        'eyes_body_parts',
        'stiffening_arms_body_parts',
        'stiffening_legs_body_parts',
        'spasmodic_legs_body_parts',
        'blank_stare_body_parts',
        'tremors_body_parts',
        'other_body_parts',
        'how_long_seizure',
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
