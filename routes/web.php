<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TroubleController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\Jobcontroll;
use App\Http\Controllers\applyjobs;

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

Auth::routes();

//allan
Route::get('/login', [AuthController::class, 'display'])->name('login');
Route::post('/login', [AuthController::class, 'formValidate']);
Route::get('/forgot-password', [AuthController::class, 'displayForgotPassword'])->name('password.request');
Route::get('/register', function(){
    return view('auth.register');
})->name('register');
Route::post('/register', [RegisterController::class, 'create'])->name('register.create');

//allan
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/account', [App\Http\Controllers\AccountController::class, 'account'])->name('account');
Route::delete('/deleteAccount', [App\Http\Controllers\AccountController::class, 'deleteAccount'])->name('deleteAccount');
Route::get('/account/change', [App\Http\Controllers\AccountController::class, 'change'])->name('change');
Route::post('/account/edit', [App\Http\Controllers\AccountController::class, 'edit'])->name('edit');



//shifly
Route::get('/faq', function () {
    return view('faq');
});


Route::get('/trouble', [TroubleController::class, 'index'])->name('trouble');
Route::post('/trouble', [TroubleController::class, 'submit'])->name('trouble.submit');
Route::get('/forum', [FAQController::class, 'index'])->name('forum');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');

Route::get('/jobopportunity', function () {
    return view('jobopportunity');
});

// controllerjobopportunity
Route::get('/jobopportunity', jobcontroll::class . '@jobIndex')->name('jobs.tech');
Route::get('/jobopportunity/tutor', Jobcontroll::class . '@tutorIndex')->name('jobs.tutoring');
Route::get('/jobopportunity/sales', Jobcontroll::class . '@salesIndex')->name('jobs.sales');
Route::get('/jobopportunity/marketing', Jobcontroll::class . '@marketingIndex')->name('jobs.marketing');
Route::get('/jobopportunity/freelance', Jobcontroll::class . '@freelanceIndex')->name('jobs.freelance');
Route::get('/jobopportunity/tech/details', function(){
    return view('details.tech.swe');
});
Route::get('/jobopportunity/details/tech/{id}', Jobcontroll::class . "@getJobDetails")->name('jobs.tech.details');
Route::get('/apply', [applyjobs::class, 'applyIndex']);
Route::post('/apply/submit', [applyjobs::class, 'insertApply'])->name('apply.submit');




Route::get('/home', [\App\Http\Controllers\CourseController::class, 'featuredCourses'])->name('home');
Route::get('/courses', [\App\Http\Controllers\CourseController::class, 'index']);
Route::get('/courses/{id}', [\App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');
Route::post('/courses/{id}/enroll', [\App\Http\Controllers\CourseController::class, 'enroll'])->name('courses.enroll');
// Adding job routes
Route::get('/jobs/{id}', [\App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');

