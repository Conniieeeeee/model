<?php

namespace Database\Seeders;

use App\Models\User;
use app\models\subjectgrade;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use app\model\student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //student::factory(10)->create();

        // User::factory()->create([;
        //    'name' => 'Test User',
        //    'email' => 'test@example.com',
    // ]);
    
        Student::factory()->count(30)->create();

        subjectgrade::factory()->count(50)->create();
    }
}