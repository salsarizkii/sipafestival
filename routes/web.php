<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ComplaintController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Models\Complaint;

Route::get('/', function () {
    return view('home');
});

Route::get('/lineup', function () {
    return view('lineup');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});


// admin

Route::get('/admin/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [loginController::class, 'login'])->name('loginbaru');
Route::post('/admin/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard', [ComplaintController::class, 'store'])->name('admin.dashboard.store');
Route::get('/admin/dashboard', [ComplaintController::class, 'showComplaint'])->name('admin.dashboard.showComplaint');

Route::post('/', [ComplaintController::class, 'store'])->name('data.store');
