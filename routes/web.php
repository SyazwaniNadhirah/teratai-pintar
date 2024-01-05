<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProgramClassController;
use App\Http\Controllers\ApplicationController;
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

//General User Routes
Route::middleware(['auth', 'user-role:user'])->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('user.dashboard');
    Route::get('/user/program', [HomeController::class, 'program'])->name('user.program');
    Route::get('/user/program/show/{id}', [HomeController::class, 'showProgram'])->name('user.showProgram');
    Route::get('/user/class', [HomeController::class, 'class'])->name('user.class');
    Route::get('/user/class/show/{id}', [HomeController::class, 'showClass'])->name('user.showClass');
    Route::get('/user/event', [EventController::class, 'display'])->name('event.display');
    Route::resource('contactUs', ContactUsController::class);
    Route::resource('application', ApplicationController::class);
    Route::put('application/delete/{id}', [ApplicationController::class, 'destroy'])->name('application.destroy');
  
});

// Admin Routes
Route::middleware(['auth', 'user-role:admin'])->group(function() {
    Route::get('/admin/home', [HomeController::class, 'indexAdmin'])->name('admin.dashboard');
    Route::resource('program', ProgramController::class);
    Route::get('/admin/contactUs', [ContactUsController::class, 'index'])->name('contactUs.index');
    Route::resource('event', EventController::class);
    Route::resource('class', ProgramClassController::class);
    Route::get('/admin/application', [ApplicationController::class, 'indexApp'])->name('application.indexApp');
    Route::get('/admin/application/show/{id}', [ApplicationController::class, 'showApp'])->name('application.showApp');
    Route::put('/admin/application/update/{id}', [ApplicationController::class, 'updateApp'])->name('application.updateApp');
    Route::get('/admin/user', [HomeController::class, 'user'])->name('admin.user');
});