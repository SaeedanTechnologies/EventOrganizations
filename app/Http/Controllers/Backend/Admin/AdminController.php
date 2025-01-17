<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\UserRolesEnum;
use App\Http\Requests\Backend\LoginRequest;
use App\Models\User;
use Auth;
use Hash;

class AdminController extends Controller
{
    public function login_view()
    {
        try {
            return view('backend.auth.login');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }

    public function login(LoginRequest $request)
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            if ($user->role == UserRolesEnum::ADMIN) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == UserRolesEnum::ORGANIZER) {
                return redirect()->route('organizer.dashboard');
            }
        }else
        {
            return back()->with('error', 'Invalid login credentials.');
        }
    }

    public function dashboard()
    {
        try {
            return view('backend.admin.dashboard');
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
        return view('backend.admin.profile');
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
