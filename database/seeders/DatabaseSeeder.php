<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $roles = ['admin', 'teacher', 'student', 'registrar'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        // User data
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => 'admin123',
                'role' => 'admin'
            ],
            [
                'name' => 'Teacher User',
                'email' => 'teacher@example.com',
                'password' => 'teacher123',
                'role' => 'teacher'
            ],
            [
                'name' => 'Student One',
                'email' => 'student1@example.com',
                'password' => 'student123',
                'role' => 'student'
            ],
            [
                'name' => 'Registrar User',
                'email' => 'registrar@example.com',
                'password' => 'registrar123',
                'role' => 'registrar'
            ],
        ];

        // Clear old users
        User::truncate();

        // Create users and assign roles
        foreach ($users as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make($userData['password']),
            ]);

            $user->assignRole($userData['role']);
        }
    }
}
