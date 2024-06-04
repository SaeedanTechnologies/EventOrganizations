<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\LoginRequest;
use App\Http\Requests\Backend\AddUserRequest;
use App\Enums\UserRolesEnum;
use App\Models\User;
use Hash;
use Auth;

class UserController extends Controller
{
    public function register_view()
    {
        return view('frontend.user.signup');
    }

    public function login_view()
    {
        return view('frontend.user.signin');
    }

    public function login(LoginRequest $request)
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            return redirect()->route('home');
        }else
        {
            return back()->with('error', 'Invalid login credentials.');
        }
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
                'role'        => UserRolesEnum::USER
            ]);
            return redirect()->route('login_view')->with('success', 'User Signup Succesfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    public function logout()
    {
        try {
            Auth::logout();
            return redirect()->route('login_view');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An unexpected error occurred. Please try again later.');
        }
    }
}
