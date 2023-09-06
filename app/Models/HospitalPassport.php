<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalPassport extends Model
{
    use HasFactory;
    protected $fillable = [
        'assessment_date',
        'staff_email',
        'patient_id',
        'likes_to_be_known',
        'nhs_number',
        'personal_care',
        'dob',
        'address',
        'city',
        'county',
        'phone_number',
        'how_i_communicate',
        'family_or_contact_person',
        'email',
        'my_support_care_needs',
        'my_carer_speaks',
        'thins_to_know',
        'religious_needs',
        'ethnicity',
        'gp_name',
        'gp_address',
        'street_address',
        'city',
        'country',
        'other_services',
        'social_worker',
        'allergies',
        'medical_interventions',
        'my_medical_histort',
        'if_im_anxious',
        'medication_admin',
        'cardio_vascular',
        'current_medication',
        'if_im_in_pain',
        'moving_around',
        'personal_care',
        'problems_with_sight',
        'how_i_eat',
        'how_i_drink',
        'how_i_keep_safe',
        'how_i_use_the_toilet',
        'sleeping',
        'things_i_like',
        'things_i_dislike',
        'additional_info',
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
