<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TroubleController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\Jobcontroll;
use App\Http\Controllers\applyjob;

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


Route::get('/login', [AuthController::class, 'display'])->name('login');
Route::post('/login', [AuthController::class, 'formValidate']);
Route::get('/forgot-password', [AuthController::class, 'displayForgotPassword'])->name('password.request');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/account', [App\Http\Controllers\AccountController::class, 'account'])->name('account');
Route::delete('/deleteAccount', [App\Http\Controllers\AccountController::class, 'deleteAccount'])->name('deleteAccount');


Route::get('/course', function () {
    return view('initialcourse');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/course', function () {
    return view('initialcourse');
});
// Set courses index as the homepage
Route::get('/course', [CourseController::class, 'index']);

// Course routes
Route::resource('courses', CourseController::class);
Route::post('courses/{course}/enroll', [CourseController::class, 'enroll'])->name('courses.enroll');

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



Route::get('/course', function () {
    return view('initialcourse');
});

Route::get('/faq', function () {
    return view('faqfeature');
});
