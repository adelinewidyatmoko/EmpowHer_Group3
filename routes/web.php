<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TroubleController;
use App\Http\Controllers\FAQController;

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

Route::get('/forum', [FAQController::class, 'index'])->name('forum');
Route::get('/faq', [FAQController::class, 'index'])->name('faq');
Route::get('/trouble', [TroubleController::class, 'index'])->name('trouble');
Route::post('/trouble', [TroubleController::class, 'submit'])->name('trouble.submit');