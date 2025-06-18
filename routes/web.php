<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/course', [\App\Http\Controllers\CourseController::class, 'featuredCourses']);

Route::get('/faq', function () {
    return view('faqfeature');
});

Route::get('/courses/{id}', [\App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');
Route::post('/courses/{id}/enroll', [\App\Http\Controllers\CourseController::class, 'enroll'])->name('courses.enroll');

// Adding job routes
Route::get('/jobs/{id}', [\App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');