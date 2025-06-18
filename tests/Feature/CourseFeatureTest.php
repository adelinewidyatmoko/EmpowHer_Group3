<?php

namespace Tests\Feature;

use App\Models\Course;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CourseFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_view_course_listing()
    {
        $course = Course::create([
            'title' => 'Learn Laravel',
            'description' => 'A comprehensive Laravel course',
            'video_url' => 'https://example.com/video.mp4'
        ]);

        $response = $this->get('/courses');

        $response->assertStatus(200)
                ->assertSee('Learn Laravel');
    }

    public function test_can_view_single_course()
    {
        $course = Course::create([
            'title' => 'Learn Laravel',
            'description' => 'A comprehensive Laravel course',
            'video_url' => 'https://example.com/video.mp4'
        ]);

        $response = $this->get('/courses/' . $course->id);

        $response->assertStatus(200)
                ->assertSee('Learn Laravel')
                ->assertSee('A comprehensive Laravel course');
    }

    public function test_returns_404_for_non_existent_course()
    {
        $this->withExceptionHandling();
        $response = $this->get('/courses/999');
        $response->assertStatus(404);
    }
}
