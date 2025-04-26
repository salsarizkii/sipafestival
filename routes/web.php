<?php

use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});
Route::get('/lineup', function () {
    return view('lineup');
});
Route::get('/faq', function () {
    return view('faq');
});

Route::get('/admin/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [loginController::class, 'login'])->name('loginbaru');
Route::post('/admin/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [dashboardController::class, 'index'])->name('dashboard');
