<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $facultyRole = Role::where('name', 'faculty')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin')
        ]);

        $faculty = User::create([
            'name' => 'faculty',
            'email' => 'faculty@faculty.com',
            'password' => Hash::make('facultyfaculty')
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('useruser')
        ]);

        $admin->roles()->attach($adminRole);
        $faculty->roles()->attach($facultyRole);
        $user->roles()->attach($userRole);
    }
}
