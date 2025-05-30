<?php

namespace Tests\Unit;

use App\Models\Course;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CourseTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_course()
    {
        $course = Course::create([
            'title' => 'Learn Laravel',
            'description' => 'A comprehensive Laravel course',
            'video_url' => 'https://example.com/video.mp4'
        ]);

        $this->assertDatabaseHas('courses', [
            'title' => 'Learn Laravel'
        ]);
    }

    public function test_can_get_course_title()
    {
        $course = Course::create([
            'title' => 'Learn Laravel',
            'description' => 'A comprehensive Laravel course',
            'video_url' => 'https://example.com/video.mp4'
        ]);

        $this->assertEquals('Learn Laravel', $course->getTitle());
    }

    public function test_can_get_course_description()
    {
        $course = Course::create([
            'title' => 'Learn Laravel',
            'description' => 'A comprehensive Laravel course',
            'video_url' => 'https://example.com/video.mp4'
        ]);

        $this->assertEquals('A comprehensive Laravel course', $course->getDesc());
    }

    public function test_can_get_course_video_url()
    {
        $course = Course::create([
            'title' => 'Learn Laravel',
            'description' => 'A comprehensive Laravel course',
            'video_url' => 'https://example.com/video.mp4'
        ]);

        $this->assertEquals('https://example.com/video.mp4', $course->getUrl());
    }

    public function test_can_handle_null_video_url()
    {
        $course = Course::create([
            'title' => 'Learn Laravel',
            'description' => 'A comprehensive Laravel course',
        ]);

        $this->assertEquals('', $course->getUrl());
    }
}
