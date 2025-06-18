<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $courses = DB::table('courses')->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Display the specified course.
     */
    public function show($id)
    {
        $course = DB::table('courses')->where('id', $id)->first();
        
        if (!$course) {
            abort(404);
        }
        
        $isEnrolled = false;
        if (Auth::check()) {
            $enrollment = DB::table('enrollments')
                ->where('user_id', Auth::id())
                ->where('course_id', $id)
                ->first();
            $isEnrolled = !is_null($enrollment);
        }
        
        return view('courses.show', compact('course', 'isEnrolled'));
    }

    /**
     * Enroll the authenticated user in the specified course.
     */
    public function enroll($id)
    {
        $course = DB::table('courses')->where('id', $id)->first();
        
        if (!$course) {
            abort(404);
        }
        
        // Check if the user is already enrolled
        $enrollment = DB::table('enrollments')
            ->where('user_id', Auth::id())
            ->where('course_id', $id)
            ->first();
        
        if (!$enrollment) {
            DB::table('enrollments')->insert([
                'user_id' => Auth::id(),
                'course_id' => $id,
                'enrolled_at' => now(),
                'progress' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // Increment enrolled count
            DB::table('courses')
                ->where('id', $id)
                ->increment('enrolled_count');
            
            return back()->with('success', 'Successfully enrolled in the course!');
        }

        return back()->with('info', 'You are already enrolled in this course.');
    }
}
