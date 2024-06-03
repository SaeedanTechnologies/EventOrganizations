<?php

namespace App\Http\Controllers\Backend\Organizer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    public function dashboard()
    {
        try {
            return view('backend.organizer.dashboard');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            return redirect()->route('login');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    public function profile()
    {
        return view('backend.organizer.profile');
    }

    public function update_profile(Request $request, $id)
    {
        try {
            $organizer = User::findOrFail($id);
            $update = $organizer->update([
                'first_name'  => $request->first_name ?? $organizer->first_name,
                'last_name'   => $request->last_name ?? $organizer->last_name,
                'email'       => $request->email ?? $organizer->email,
                'password'    => Hash::make($request->password) ?? $organizer->password,
                'original_password' => $request->password ?? $organizer->password,
                'phone'       => $request->phone ?? $organizer->phone,
            ]);
            return redirect()->back()->with('success', 'Profile updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }
}