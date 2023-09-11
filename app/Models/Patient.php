<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'patient_name',
        'house',
        'Staff_Id', // Corrected the case to match your database column.
        'id_number',
        'address',
        'phone_number',
        'email',
    ];

 public function user()
 {
    return $this->belongsTo(User::class);
 }

 public function patient()
{
        return $this->belongsTo(Patient::class);
 }

 public function dailyEntries()
 {
        return $this->hasMany(DailyEntry::class);
  }

  public function supportPlans()
    {
        return $this->hasMany(MySupportPlan::class);
    }

    public function hospitalPassports()
    {
        return $this->hasMany(HospitalPassport::class);
    }

    public function abcReports()
    {
        return $this->hasMany(abcReport::class);
    }

    public function positiveBehaviourSupport()
    {
        return $this->hasOne(PositiveBehaviourSupport::class);
    }

    public function seizureReports()
    {
        return $this->hasMany(SeizureReport::class);
    }
}
