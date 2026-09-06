<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'first_name' => 'System',
            'last_name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'password',
            'role' => 'ADMIN',
            'is_active' => true,
        ]);

        $supervisor1 = User::create([
            'first_name' => 'Ahmed',
            'last_name' => 'Benali',
            'email' => 'ahmed@example.com',
            'password' => 'password',
            'role' => 'SUPERVISOR',
            'is_active' => true,
        ]);

        $supervisor2 = User::create([
            'first_name' => 'Sara',
            'last_name' => 'Alaoui',
            'email' => 'sara@example.com',
            'password' => 'password',
            'role' => 'SUPERVISOR',
            'is_active' => true,
        ]);

        $supervisor1->supervisor()->create();
        $supervisor2->supervisor()->create();

        $students = [
            [
                'first_name' => 'Youssef',
                'last_name' => 'Amrani',
                'email' => 'youssef@example.com',
                'stage_subject' => 'Web Development',
                'supervisor' => $supervisor1,
            ],
            [
                'first_name' => 'Imane',
                'last_name' => 'Idrissi',
                'email' => 'imane@example.com',
                'stage_subject' => 'Artificial Intelligence',
                'supervisor' => $supervisor1,
            ],
            [
                'first_name' => 'Omar',
                'last_name' => 'Tazi',
                'email' => 'omar@example.com',
                'stage_subject' => 'Mobile Development',
                'supervisor' => $supervisor1,
            ],
            [
                'first_name' => 'Nour',
                'last_name' => 'Bennani',
                'email' => 'nour@example.com',
                'stage_subject' => 'Cybersecurity',
                'supervisor' => $supervisor2,
            ],
            [
                'first_name' => 'Karim',
                'last_name' => 'Fassi',
                'email' => 'karim@example.com',
                'stage_subject' => 'Data Engineering',
                'supervisor' => $supervisor2,
            ],
            [
                'first_name' => 'Salma',
                'last_name' => 'Chraibi',
                'email' => 'salma@example.com',
                'stage_subject' => 'Cloud Computing',
                'supervisor' => $supervisor2,
            ],
        ];

        foreach ($students as $studentData) {
            $user = User::create([
                'first_name' => $studentData['first_name'],
                'last_name' => $studentData['last_name'],
                'email' => $studentData['email'],
                'password' => 'password',
                'role' => 'STUDENT',
                'is_active' => true,
            ]);

            $user->student()->create([
                'stage_subject' => $studentData['stage_subject'],
                'supervisor_id' => $studentData['supervisor']->id,
            ]);
        }
    }
}
