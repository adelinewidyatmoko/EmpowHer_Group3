<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        // Create Course Categories
        $categories = [
            [
                'name' => 'Technology',
                'description' => 'Courses related to programming, web development, and digital skills',
                'image' => 'categories/technology.jpg'
            ],
            [
                'name' => 'Business',
                'description' => 'Entrepreneurship, marketing, and business management courses',
                'image' => 'categories/business.jpg'
            ],
            [
                'name' => 'Personal Development',
                'description' => 'Self-improvement, leadership, and soft skills courses',
                'image' => 'categories/personal-development.jpg'
            ],
            [
                'name' => 'Design',
                'description' => 'Graphic design, UI/UX, and digital art courses',
                'image' => 'categories/design.jpg'
            ]
        ];

        foreach ($categories as $category) {
            CourseCategory::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'description' => $category['description'],
                'image' => $category['image']
            ]);
        }

        // Create Courses
        $courses = [
            [
                'title' => 'Web Development Fundamentals',
                'subtitle' => 'Learn HTML, CSS, and JavaScript',
                'description' => 'Master the core technologies of web development. This comprehensive course covers HTML5, CSS3, and modern JavaScript.',
                'duration' => '12 weeks',
                'enrolled_count' => 1500,
                'rating' => 4.8,
                'provider' => 'EmpowHer Academy',
                'type' => 'Technology',
                'image' => 'courses/web-development.jpg',
                'video_url' => 'https://example.com/videos/web-dev-intro'
            ],
            [
                'title' => 'Digital Marketing Essentials',
                'subtitle' => 'Build Your Online Marketing Strategy',
                'description' => 'Learn how to create and execute effective digital marketing campaigns, including social media, SEO, and content marketing.',
                'duration' => '8 weeks',
                'enrolled_count' => 2100,
                'rating' => 4.7,
                'provider' => 'EmpowHer Academy',
                'type' => 'Business',
                'image' => 'courses/digital-marketing.jpg',
                'video_url' => 'https://example.com/videos/digital-marketing'
            ],
            [
                'title' => 'Leadership Skills Masterclass',
                'subtitle' => 'Develop Essential Leadership Qualities',
                'description' => 'Enhance your leadership capabilities with practical skills in team management, communication, and decision-making.',
                'duration' => '6 weeks',
                'enrolled_count' => 1800,
                'rating' => 4.9,
                'provider' => 'EmpowHer Academy',
                'type' => 'Personal Development',
                'image' => 'courses/leadership.jpg',
                'video_url' => 'https://example.com/videos/leadership'
            ],
            [
                'title' => 'UI/UX Design Principles',
                'subtitle' => 'Create User-Centered Designs',
                'description' => 'Learn the fundamentals of user interface and user experience design, including wireframing, prototyping, and user research.',
                'duration' => '10 weeks',
                'enrolled_count' => 1200,
                'rating' => 4.6,
                'provider' => 'EmpowHer Academy',
                'type' => 'Design',
                'image' => 'courses/uiux-design.jpg',
                'video_url' => 'https://example.com/videos/uiux-design'
            ]
        ];

        foreach ($courses as $course) {
            $category = CourseCategory::where('name', $course['type'])->first();
            $courseData = array_merge($course, ['course_category_id' => $category->id]);
            unset($courseData['type']);
            Course::create($courseData);
        }
    }
}
