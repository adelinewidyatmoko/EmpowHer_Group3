<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Featured courses
        DB::table('course')->insert([
            [
                'title' => 'Web Development Fundamentals',
                'subtitle' => 'Learn HTML, CSS & JavaScript',
                'description' => 'A comprehensive introduction to modern web development. Master the core technologies that power the web.',
                'provider' => 'EmpowHer',
                'type' => 'web-dev',
                'duration' => '8 weeks',
                'is_featured' => true,
                'enrolled_count' => 125,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Science Essentials',
                'subtitle' => 'Python for Data Analysis',
                'description' => 'Discover how to analyze and visualize data using Python. Perfect for beginners in data science.',
                'provider' => 'DataCamp',
                'type' => 'data-science',
                'duration' => '10 weeks',
                'is_featured' => true,
                'enrolled_count' => 89,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UX/UI Design Principles',
                'subtitle' => 'Create User-Centered Designs',
                'description' => 'Learn the fundamentals of user experience and interface design. Create beautiful, functional designs that users love.',
                'provider' => 'DesignAcademy',
                'type' => 'design',
                'duration' => '6 weeks',
                'is_featured' => true,
                'enrolled_count' => 56,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile App Development',
                'subtitle' => 'Build iOS & Android Apps',
                'description' => 'Create cross-platform mobile applications using modern frameworks. Deploy to both major app stores.',
                'provider' => 'AppU',
                'type' => 'mobile-dev',
                'duration' => '12 weeks',
                'is_featured' => false,
                'enrolled_count' => 42,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
