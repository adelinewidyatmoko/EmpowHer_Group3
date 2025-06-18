<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Set courses index as the homepage
Route::get('/', [CourseController::class, 'index']);

// Course routes (resource style)
Route::resource('courses', CourseController::class);
Route::post('courses/{course}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');

// Additional course routes
Route::get('/course', [CourseController::class, 'featuredCourses']);

// FAQ route
Route::get('/faq', function () {
    return view('faqfeature');
});

// Job routes
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
