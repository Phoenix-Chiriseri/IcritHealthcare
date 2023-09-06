<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'patient_name',
        'house',
        'Staff_id',
        'id_number',
        'address',
        'phone_number',
        'email',
        // Add more fields as needed.
    ];


 public function user()
 {
    return $this->belongsTo(User::class);
 }

 public function dailyEntries()
 {
        return $this->hasMany(DailyEntry::class);
  }

  public function supportPlans()
    {
        return $this->hasMany(MySupportPlan::class);
    }
}
