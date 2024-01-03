<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

// Route::get('/contact', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::resource('contactUs', ContactUsController::class);
//General User Routes
Route::middleware(['auth', 'user-role:user'])->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('user.dashboard');
   
  
});

// Admin Routes
Route::middleware(['auth', 'user-role:admin'])->group(function() {
    Route::get('/admin/home', [HomeController::class, 'indexAdmin'])->name('admin.dashboard');
    Route::resource('program', ProgramController::class);
    Route::get('/admin/contactUs', [ContactUsController::class, 'index'])->name('contactUs.index');
});