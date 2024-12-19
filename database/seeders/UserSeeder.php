<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name"=> "Admin",
                "email"=> "admin@test.com",
                "password"=> Hash::make('password'),
                "role"=> "admin",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ahmad Fauzan',
                'email' => 'ahmad.fauzan@example.com',
                'password' => Hash::make('password'),
                "role"=> "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Siti Aisyah',
                'email' => 'siti.aisyah@example.com',
                "password"=> Hash::make('password'),
                "role"=> "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Indra Wijaya',
                'email' => 'indra.wijaya@example.com',
                "password"=> Hash::make('password'),
                "role"=> "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fitria Sari',
                'email' => 'fitria.sari@example.com',
                "password"=> Hash::make('password'),
                "role"=> "user",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
