<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Enums\UserRolesEnum;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::create([
            'first_name' => 'admin',
            'last_name'  => '',
            'email'      => 'admin@admin.com',
            'password'   => Hash::make('password'),
            'original_password' => 'password',
            'role'       => UserRolesEnum::ADMIN
        ]);
    }
}