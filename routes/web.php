<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\jobcontroll;
use App\Http\Controllers\Marketingcontroll;
use App\Http\Controllers\Salescontroll;
use App\Http\Controllers\Tutorcontroll;
use App\Http\Controllers\Freelancecontroll;
use App\Http\Controllers\applyjobs;
use App\Http\Controllers\TroubleController;
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

// Authentication routes
Auth::routes();

// Login routes
Route::get('/login', [AuthController::class, 'display'])->name('login');
Route::post('/login', [AuthController::class, 'formValidate']);
Route::get('/forgot-password', [AuthController::class, 'displayForgotPassword'])->name('password.request');

// Home routes - set featured courses/dashboard as homepage
Route::get('/', [CourseController::class, 'featuredCourses']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Account management
Route::get('/account', [AccountController::class, 'account'])->name('account');
Route::delete('/deleteAccount', [AccountController::class, 'deleteAccount'])->name('deleteAccount');

// Course routes (resource style)
Route::resource('courses', CourseController::class);
Route::post('courses/{course}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');

// Additional course routes
Route::get('/course', [CourseController::class, 'featuredCourses']);
Route::get('/courses-list', [CourseController::class, 'index'])->name('courses.list');

// FAQ route
Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');

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

// Trouble report routes
Route::get('/trouble', [TroubleController::class, 'index'])->name('trouble.index');
Route::post('/trouble', [TroubleController::class, 'submit'])->name('trouble.submit');
