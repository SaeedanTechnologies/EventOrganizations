<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\UserRolesEnum;
use App\Models\User;
use App\Http\Requests\Backend\AddUserRequest;
use Hash;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }
    
    public function index()
    {
        $users = $this->model::where('role', UserRolesEnum::USER)->get();
        return view('backend.admin.user.list', compact('users'));
    }

    
    public function create()
    {
        return view('backend.admin.user.create');
    }

   
    public function store(AddUserRequest $request)
    {
        try {
            $data = $request->validated();
            $this->model::create([
                'first_name'  => $data['first_name'],
                'last_name'   => $data['last_name'],
                'email'       => $data['email'],
                'password'    => Hash::make($data['password']),
                'original_password' => $data['password'],
                'phone'       => $data['phone'],
                'role'        => UserRolesEnum::USER
            ]);
            return redirect()->route('admin.users.index')->with('success', 'Organizer added succesfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

   
    public function show(string $id)
    {
        dd($id);
    }

    
    public function edit(string $id)
    {
        try {
            $user = $this->model::findOrFail($id);
            return view('backend.admin.user.update', compact('user'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
        
    }

    
    public function update(AddUserRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $organizer = $this->model::findOrFail($id);
            $update = $organizer->update([
                'first_name'  => $data['first_name'] ?? $organizer->first_name,
                'last_name'   => $data['last_name'] ?? $organizer->last_name,
                'email'       => $data['email'] ?? $organizer->email,
                'password'    => Hash::make($data['password']) ?? $organizer->password,
                'original_password' => $data['password'] ?? $organizer->password,
                'phone'       => $data['phone'] ?? $organizer->phone,
            ]);
            return redirect()->route('admin.users.index')->with('success', 'Organizer added updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    
    public function destroy(string $id)
    {
        //
    }
}
