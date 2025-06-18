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
                'descirption' => 'A comprehensive introduction to modern web development. Master the core technologies that power the web with HTML, CSS & JavaScript.',
                'videourl' => 'https://youtu.be/Jp9vpUF8RBM?si=PIJIOk0cqZPGEMe1',
            ],
            [
                'title' => 'Data Science Essentials',
                'descirption' => 'Discover how to analyze and visualize data using Python. Perfect for beginners in data science.',
                'videourl' => 'https://youtu.be/2xxMJEj4Oyg?si=TVOGMyVdIMq2i0GW',
            ],
            [
                'title' => 'UX/UI Design Principles',
                'descirption' => 'Learn the fundamentals of user experience and interface design. Create beautiful, functional designs that users love.',
                'videourl' => 'https://youtu.be/LHBE6Q9XlzI?si=i_TjYKU2v44Bqf-b',
            ],
            [
                'title' => 'Mobile App Development',
                'descirption' => 'Create cross-platform mobile applications using modern frameworks. Deploy to both major app stores.',
                'videourl' => 'https://youtu.be/Jp9vpUF8RBM?si=PIJIOk0cqZPGEMe1',
            ],
        ]);
    }
}
