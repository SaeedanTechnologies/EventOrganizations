<?php

namespace App\Http\Controllers\Backend\Organizer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\UserRolesEnum;
use Auth;
use Hash;
use App\Http\Requests\Backend\AddUserRequest;
use App\Models\User;

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

    public function register_view()
    {
        return view('backend.organizer.register');
    }

    public function register(AddUserRequest $request)
    {
        try {
            $data = $request->validated();
            User::create([
                'first_name'  => $data['first_name'],
                'last_name'   => $data['last_name'],
                'email'       => $data['email'],
                'password'    => Hash::make($data['password']),
                'original_password' => $data['password'],
                'phone'       => $data['phone'],
                'role'        => UserRolesEnum::ORGANIZER
            ]);
            return redirect()->route('login')->with('success', 'Signup Succesfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }
}