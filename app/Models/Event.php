<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'organizer_id',
        'title',
        'description',
        'date',
        'start_time',
        'end_time',
        'price',
        'location',
        'image',
        'status'
    ];

    protected $with = ['SpecialOffer', 'Organizer', 'Booking'];

    public function Organizer()
    {
        return $this->belongsTo(User::class);
    }

    public function SpecialOffer()
    {
        return $this->hasOne(SpecialOffer::class);
    }

    public function Booking()
    {
        return $this->hasMany(SpecialOffer::class);
    }
}
