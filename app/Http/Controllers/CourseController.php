<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the courses.
     */
    public function index()
    {
        $courses = Course::latest()->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Display the specified course.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Enroll the authenticated user in the specified course.
     */
    public function enroll(Request $request, Course $course)
    {
        // Check if user is already enrolled
        $existingEnrollment = $course->enrollments()
            ->where('user_id', auth()->id())
            ->exists();

        if ($existingEnrollment) {
            return back()->with('error', 'You are already enrolled in this course.');
        }

        // Create enrollment
        $course->enrollments()->create([
            'user_id' => auth()->id(),
            'progress' => 0,
            'completed' => false
        ]);

        return back()->with('success', 'Successfully enrolled in the course!');
    }

    /**
     * Update the user's progress in the course.
     */
    public function updateProgress(Request $request, Course $course)
    {
        $request->validate([
            'progress' => 'required|integer|min:0|max:100'
        ]);

        $enrollment = $course->enrollments()
            ->where('user_id', auth()->id())
            ->firstOrFail();

        $enrollment->update([
            'progress' => $request->progress,
            'completed' => $request->progress === 100
        ]);

        return response()->json([
            'success' => true,
            'progress' => $request->progress,
            'completed' => $request->progress === 100
        ]);
    }
}
