<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        // Create courses
        $courses = [
            [
                'title' => 'Data Science with R',
                'subtitle' => 'Master data analysis with R Programming',
                'description' => 'Powerful, open-source programming and software environment widely used in data science for statistical analysis, visualization, and building machine learning models.',
                'duration' => '8 weeks',
                'enrolled_count' => 8432,
                'rating' => 4.8,
                'provider' => 'Coursera',
                'type' => 'r-programming',
                'image' => 'courses/r-programming.jpg',
                'video_url' => 'https://www.youtube.com/embed/example1'
            ],
            [
                'title' => 'Data Science with Excel',
                'subtitle' => 'Master data analysis and visualization using Microsoft Excel',
                'description' => 'Learn to transform raw data into meaningful insights without requiring complex programming knowledge. This course covers advanced Excel functions, data visualization, and statistical analysis.',
                'duration' => '4-6 weeks',
                'enrolled_count' => 12543,
                'rating' => 4.7,
                'provider' => 'Coursera',
                'type' => 'excel',
                'image' => 'courses/excel.jpg',
                'video_url' => 'https://www.youtube.com/embed/example2'
            ],
            [
                'title' => 'Python Data Science',
                'subtitle' => 'Learn data science with Python',
                'description' => 'Python is a programming language widely used by Data Analysts. Python has mathematical libraries and functions, making it easier to calculate and analyze large datasets.',
                'duration' => '10 weeks',
                'enrolled_count' => 15678,
                'rating' => 4.9,
                'provider' => 'Coursera',
                'type' => 'python',
                'image' => 'courses/python.jpg',
                'video_url' => 'https://www.youtube.com/embed/example3'
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
