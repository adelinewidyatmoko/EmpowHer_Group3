<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['enroll']);
    }

    /**
     * Display a listing of the courses.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Display the specified course.
     */
    public function show(Course $course)
    {
        $isEnrolled = false;
        if (Auth::check()) {
            $isEnrolled = $course->enrollments()
                ->where('user_id', Auth::id())
                ->exists();
        }
        return view('courses.show', compact('course', 'isEnrolled'));
    }

    /**
     * Enroll the authenticated user in the specified course.
     */
    public function enroll(Course $course)
    {
        // Check if the user is already enrolled
        $enrollment = $course->enrollments()
                           ->where('user_id', Auth::id())
                           ->first();

        if (!$enrollment) {
            Enrollment::create([
                'user_id' => Auth::id(),
                'course_id' => $course->id,
                'enrolled_at' => now(),
                'progress' => 0
            ]);

            // Increment enrolled count
            $course->increment('enrolled_count');

            return back()->with('success', 'Successfully enrolled in the course!');
        }

        return back()->with('info', 'You are already enrolled in this course.');
    }
}
