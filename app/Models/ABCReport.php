<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ABCReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'initialsOfPerson',
        'start_time',
        'end_time',
        'influencing_factors',
        'what_happened_before_incident',
        'behaviors', // Note: Behaviors will be stored as JSON, so no need for separate checkboxes
        'what_happened_after_incident',
        'immediateActions',
        'done_differently',
        'proact_scip_interventions',
        'medication_administered',
        'physical_contact_injury_intimidation',
    ];
    
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
