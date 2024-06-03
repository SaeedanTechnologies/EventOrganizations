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
        'time',
        'location',
        'image',
        'status'
    ];

    public function Organizer()
    {
        return $this->belongsTo(User::class);
    }

    public function SpecialOffer()
    {
        return $this->hasMany(SpecialOffer::class);
    }
}
