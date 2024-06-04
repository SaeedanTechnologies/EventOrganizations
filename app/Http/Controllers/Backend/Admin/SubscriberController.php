<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\NewsletterMail;

class SubscriberController extends Controller
{
    public function all_subscriber()
    {
        $subscibers = Subscriber::all();
        return view('backend.admin.subscriber.list', compact('subscibers'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers',
        ]);
        try {
            Subscriber::create([
                'email' => $request->email,
            ]);
            return redirect()->back()->with('success', 'Subscribed successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
        
    }

    public function newsletter()
    {
        return view('backend.admin.subscriber.createNewsletter');
    }

    public function send_newsletter(Request $request)
    {
        $request->validate([
            'subject' => 'required|string',
            'content' => 'required'
        ]);

        try {
            $subscribers = Subscriber::all(); 
            $subject = $request->input('subject');
            $content = $request->input('content');
            foreach ($subscribers as $subscriber) {
                Mail::to($subscriber->email)->send(new NewsletterMail($subject, $content));
            }
            return redirect()->back()->with('success', 'Newsletter sent successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }
}
