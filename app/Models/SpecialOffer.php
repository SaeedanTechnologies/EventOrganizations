<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialOffer extends Model
{
    use HasFactory;

    protected $fillable = [
        'organizer_id',
        'event_id',
        'title',
        'description',
        'discount_percentage',
        'start_date',
        'end_date',
    ];

    public function Organizer()
    {
        return $this->belongsTo(User::class);
    }

    public function Event()
    {
        return $this->belongsTo(Event::class);
    }
}
