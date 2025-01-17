<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'original_password',
        'role'
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

   
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Event()
    {
        return $this->hasMany(Event::class);
    }

    public function SpecialOffer()
    {
        return $this->hasMany(SpecialOffer::class);
    }

    public function Booking()
    {
        return $this->hasMany(SpecialOffer::class);
    }

    
}
