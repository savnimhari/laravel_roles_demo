<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents\Seeder;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // Create roles
    foreach (['admin', 'teacher', 'student', 'registrar'] as $role) {
        \Spatie\Permission\Models\Role::firstOrCreate(['name' => $role]);
    }

    // Create test user if not exists
    User::firstOrCreate(
        ['email' => 'test@example.com'],
        ['name' => 'Test User']
    );
}

}
