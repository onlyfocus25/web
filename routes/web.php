<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/background', function(){
    return view('about.aboutus');
})->name('about');
Route::get('/mission and Vission', function(){
    return view('about.mission_vission');
})->name('mission_vission');

Route::get('/DMI in Africa', function(){
    return view('about.dmi_in_africa');
})->name('dmi_in_africa');

Route::get('/University Council', function(){
    return view('about.un_council');
})->name('un_council');

// Authentication Routes
Route::view('/register', 'register.register')->name('register_home');
Route::post('/register', [AuthController::class, 'register']);
Route::view('/login', 'register.login')->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Application Routes
Route::get('/profile', [ApplicationController::class, 'showProfileForm'])->name('profile');
Route::put('/profile', [ApplicationController::class, 'updatePersonalInfo'])->name('profile.update');

Route::get('/education', [ApplicationController::class, 'showEducationForm'])->name('education');
Route::post('/education', [ApplicationController::class, 'educationInfo'])->name('education.Save');
Route::get('/program', [ApplicationController::class, 'showProgramForm'])->name('program');
Route::post('/program', [ApplicationController::class, 'programInfo'])->name('application.saveProgram');
// Route for confirmation page
Route::get('/confirmation', [ApplicationController::class, 'showConfirmation'])->name('confirmation');
// Route for confirmation action
Route::post('/confirm-submission', [ApplicationController::class, 'confirmSubmission'])->name('application.confirm');

// Route::get('/success', function() {
//     return view('success');
// })->name('success');

// // Add similar routes for documents and submission steps.

// Route::view('/program', 'application.program')->name('program');
// Route::post('/program', [ApplicationController::class, 'saveProgram']);
Route::view('/home', 'application.home')->name('home');
// Route::get('/submission', [ApplicationController::class, 'showSubmission'])->name('application.submission');

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/approve/{id}', [AdminController::class, 'approveApplication'])->name('admin.approve');
    Route::post('/admin/reject/{id}', [AdminController::class, 'rejectApplication'])->name('admin.reject');
});

