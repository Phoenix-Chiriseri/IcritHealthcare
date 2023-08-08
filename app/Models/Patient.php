<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  use HasFactory;
  protected $fillable = ['patient_name', 'house', 'Staff_Id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'Staff_Id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function dailyEntries()
    {
        return $this->hasMany(DailyEntry::class);
    }

}
