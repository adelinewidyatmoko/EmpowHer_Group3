<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;

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
    return view('faqfeature');
});
