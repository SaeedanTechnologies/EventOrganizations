<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\UserRolesEnum;
use App\Models\User;
use App\Http\Requests\Backend\AddUserRequest;
use Hash;

class OrganizerController extends Controller
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }
    
    public function index()
    {
        $organizers = $this->model::where('role', UserRolesEnum::ORGANIZER)->get();
        return view('backend.admin.organizer.list', compact('organizers'));
    }

    
    public function create()
    {
        return view('backend.admin.organizer.create');
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
                'role'        => UserRolesEnum::ORGANIZER
            ]);
            return redirect()->route('admin.organizers.index')->with('success', 'Organizer added succesfully');
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
            $organizer = $this->model::findOrFail($id);
            return view('backend.admin.organizer.update', compact('organizer'));
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
            return redirect()->route('admin.organizers.index')->with('success', 'Organizer added updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    
    public function destroy(string $id)
    {
        //
    }
}
