<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'user_id'
    ];

    protected $with = ['Event', 'User'];

    public function Event()
    {
        return $this->belongsTo(Event::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
