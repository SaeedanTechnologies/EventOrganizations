<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Event, Booking};

class HomeController extends Controller
{
    public function home()
    {
        $event = Event::orderBy('created_at', 'desc')->take(10)->get();
        return view('frontend.home', compact('event'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function events()
    {
        $event = Event::all();
        return view('frontend.event', compact('event'));
    }

    public function event_detail($event_id)
    {
        $event = Event::findOrFail($event_id);
        return view('frontend.event_detail', compact('event'));
    }

    public function booking($event_id)
    {
        $event_booking = Booking::where('user_id', auth()->user()->id)
                                ->where('event_id', $event_id)
                                ->exists();
        
        if(!$event_booking)
        {
            $booking = Booking::create([
                'user_id' => auth()->user()->id,
                'event_id'=> $event_id
            ]);
            if($booking)
            {
                return redirect()->back()->with('success', 'Event has been booked');
            }else
            {
                return redirect()->back()->with('error', 'Something Went Wrong');
            }
        }else
        {
            return redirect()->back()->with('error', 'You already book this event');
        }
        
    }
}
