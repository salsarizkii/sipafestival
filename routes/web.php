<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\LoginController;
use App\Mail\EmailReply;
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

Route::post('/', [ComplaintController::class, 'store'])->name('data.store');

// admin

Route::get('/admin/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [loginController::class, 'login'])->name('loginbaru');
Route::post('/admin/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/admin/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard', [ComplaintController::class, 'store'])->name('admin.dashboard.store');
Route::get('/admin/dashboard', [ComplaintController::class, 'showComplaint'])->name('admin.dashboard.showComplaint');


Route::get('/admin/dashboard/{id}/reply', [ComplaintController::class, 'sendEmail'])->name('admin.dashboard.sendEmail');
Route::post('/admin/dashboard/{id}/reply', [EmailController::class, 'sendEmail'])->name('admin.ReplyEmail');
Route::get('/admin/dashboard/reply', function () {
    return view('admin.reply');
});
