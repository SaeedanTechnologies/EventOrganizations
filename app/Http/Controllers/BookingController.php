<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Booking, Event};

class BookingController extends Controller
{
    public function all_booking()
    {
        $booking = Booking::all();
        return view('backend.admin.booking.list', compact('booking'));
    }

    public function organizer_booking()
    {
        $booking = Booking::whereHas('event', function ($query) {
                        $query->where('organizer_id', auth()->user()->id);
                    })->get();
        return view('backend.organizer.booking.list', compact('booking'));
    }
}
