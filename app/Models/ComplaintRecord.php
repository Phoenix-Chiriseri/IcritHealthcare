<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'phone_number',
        'address',
        'email',
        'street_address',
        'city',
        'country',
        'relative_status',
        'detailsOfComplaint',
        'complaintDescription',
        'recordedBy',
        'injuries',
        'complaintDate',
        'position',
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
