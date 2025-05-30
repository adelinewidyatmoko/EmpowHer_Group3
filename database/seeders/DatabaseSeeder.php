<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test users
        User::factory(10)->create();

        // Create course categories
        $categories = [
            [
                'name' => 'Business & Entrepreneurship',
                'slug' => 'business-entrepreneurship',
                'description' => 'Learn essential business skills and entrepreneurship fundamentals'
            ],
            [
                'name' => 'Technology & Programming',
                'slug' => 'technology-programming',
                'description' => 'Master modern technology and programming skills'
            ],
            [
                'name' => 'Personal Development',
                'slug' => 'personal-development',
                'description' => 'Enhance your personal and professional growth'
            ]
        ];

        foreach ($categories as $category) {
            CourseCategory::create($category);
        }

        // Create sample courses
        $courses = [
            [
                'title' => 'Starting a Successful Business',
                'slug' => 'starting-successful-business',
                'description' => 'Learn how to start and grow a successful business from scratch',
                'category_id' => 1,
                'instructor' => 'Jane Smith',
                'duration_hours' => 40,
                'lessons_count' => 24,
                'price' => 99.99,
                'difficulty_level' => 'Intermediate',
                'language' => 'English',
                'is_featured' => true,
                'syllabus' => json_encode([
                    'Introduction to Business',
                    'Market Research',
                    'Business Planning',
                    'Financial Management',
                    'Marketing Strategies'
                ])
            ],
            [
                'title' => 'Web Development Fundamentals',
                'slug' => 'web-development-fundamentals',
                'description' => 'Master the basics of web development with HTML, CSS, and JavaScript',
                'category_id' => 2,
                'instructor' => 'John Doe',
                'duration_hours' => 60,
                'lessons_count' => 36,
                'price' => 149.99,
                'difficulty_level' => 'Beginner',
                'language' => 'English',
                'is_featured' => true,
                'syllabus' => json_encode([
                    'HTML Basics',
                    'CSS Fundamentals',
                    'JavaScript Essentials',
                    'Responsive Design',
                    'Basic Web Projects'
                ])
            ],
            [
                'title' => 'Leadership Skills Mastery',
                'slug' => 'leadership-skills-mastery',
                'description' => 'Develop essential leadership skills for career growth',
                'category_id' => 3,
                'instructor' => 'Sarah Johnson',
                'duration_hours' => 30,
                'lessons_count' => 18,
                'price' => 79.99,
                'difficulty_level' => 'Advanced',
                'language' => 'English',
                'is_featured' => false,
                'syllabus' => json_encode([
                    'Leadership Fundamentals',
                    'Team Management',
                    'Communication Skills',
                    'Conflict Resolution',
                    'Strategic Planning'
                ])
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
