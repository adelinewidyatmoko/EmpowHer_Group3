<?php

use App\Http\Controllers\jobcontroll;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Marketingcontroll;
use App\Http\Controllers\Salescontroll;
use App\Http\Controllers\Tutorcontroll;
use App\Http\Controllers\Freelancecontroll;
use App\Http\Controllers\applyjobs;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Job routes - both approaches
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');

// Job opportunity routes
Route::get('/jobopportunity', [jobcontroll::class, 'jobIndex'])->name('jobs.tech');
Route::get('/jobopportunity/tutor', [Tutorcontroll::class, 'tutorIndex'])->name('jobs.tutoring');
Route::get('/jobopportunity/sales', [Salescontroll::class, 'salesIndex'])->name('jobs.sales');
Route::get('/jobopportunity/marketing', [Marketingcontroll::class, 'marketingIndex'])->name('jobs.marketing');
Route::get('/jobopportunity/freelance', [Freelancecontroll::class, 'freelanceIndex'])->name('jobs.freelance');
Route::get('/jobopportunity/tech/details', function(){
    return view('details.tech.swe');
});
Route::get('/jobopportunity/details/tech/{id}', [jobcontroll::class, "getJobDetails"])->name('jobs.tech.details');

// Apply routes
Route::get('/apply', [applyjobs::class, 'applyIndex']);
Route::post('/apply/submit', [applyjobs::class, 'insertApply'])->name('apply.submit');
