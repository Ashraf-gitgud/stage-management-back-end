<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $supervisor1 = User::create([
            'first_name' => 'Ahmed',
            'last_name' => 'Benali',
            'email' => 'ahmed@example.com',
            'password' => Hash::make('password'),
            'role' => 'SUPERVISOR',
            'is_active' => true,
        ]);

        $supervisor2 = User::create([
            'first_name' => 'Sara',
            'last_name' => 'Alaoui',
            'email' => 'sara@example.com',
            'password' => Hash::make('password'),
            'role' => 'SUPERVISOR',
            'is_active' => true,
        ]);

        $student1 = User::create([
            'first_name' => 'Youssef',
            'last_name' => 'Amrani',
            'email' => 'youssef@example.com',
            'password' => Hash::make('password'),
            'role' => 'STUDENT',
            'is_active' => true,
        ]);

        $student2 = User::create([
            'first_name' => 'Imane',
            'last_name' => 'Idrissi',
            'email' => 'imane@example.com',
            'password' => Hash::make('password'),
            'role' => 'STUDENT',
            'is_active' => true,
        ]);

        // Create supervisor records
        $supervisor1->supervisor()->create([
            'user_id' => $supervisor1->id,
        ]);

        $supervisor2->supervisor()->create([
            'user_id' => $supervisor2->id,
        ]);

        // Create student records
        $student1->student()->create([
            'user_id' => $student1->id,
            'stage_subject' => 'Web Development',
            'supervisor_id' => $supervisor1->id,
        ]);

        $student2->student()->create([
            'user_id' => $student2->id,
            'stage_subject' => 'Artificial Intelligence',
            'supervisor_id' => $supervisor2->id,
        ]);
    }
}