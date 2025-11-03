<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/blog', function () {
//     return view('blog');
// });
Route::get('/access-control-system', function () {
    return view('access-control-system');
});
Route::get('/access-control-system', function () {
    return view('access-control-system');
});
Route::get('/automatic-gates-shutter-and-curtains', function () {
    return view('automatic-gates-shutter-and-curtains');
});
Route::get('/cctv-surveillance-system', function () {
    return view('cctv-surveillance-system');
});
Route::get('/elavate-security', function () {
    return view('elavate-security');
});
Route::get('/security-fire-alarm-system', function () {
    return view('security-fire-alarm-system');
});
Route::get('/the-future', function () {
    return view('the-future');
});
Route::get('/transform-home', function () {
    return view('transform-home');
});
Route::get('/video-doorbell-system', function () {
    return view('video-doorbell-system');
});
Route::get('/home-automation', function () {
    return view('home-automation');
});
// Authentication Routes


// Public routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Protected routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');
});

// Home route
// Route::get('/', function () {
//     return view('welcome');
// });