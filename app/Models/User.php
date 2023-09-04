<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Patient;
use App\Models\MySupportPlan;
use App\Models\BehaviouralMonitorChart;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
            'username',
            'email',
            'password',
            'house',
            'is_admin'
        ];
        /**
         * The attributes that should be hidden for serialization.
         *
         * @var array<int, string>
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];
    
        /**
         * The attributes that should be cast.
         *
         * @var array<string, string>
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    
    
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
    
    public function dailyEntries()
    {
        return $this->hasMany(DailyEntry::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    // A support plan also belongs to a user (the creator)
   
    public function supportPlans(){

        return $this->hasMany(MySupportPlan::class);
    }

    public function behaviouralCharts()
    {
        return $this->hasMany(BehaviouralMonitorChart::class);
    }

}
