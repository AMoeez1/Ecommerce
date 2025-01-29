<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           'name' => "Admin",
           'email' => "admin@admin.com",
           'password' => bcrypt("admin123"),
           'address' => 'Pakistan',
           'phone' => "123456789",
           'dob' => '2005-08-01',
           'gender' => 'male',
           'is_admin' => true,
        ]);
    }
}
