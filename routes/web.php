<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

// Home page - show your custom home.blade.php
Route::get('/', function () {
    return view('home');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});


// Auth routes
require __DIR__.'/auth.php';

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', function () {
        return view('admin.users');
    })->name('users');

    Route::get('/roles', function () {
        return view('admin.roles');
    })->name('roles');

    Route::get('/permissions', function () {
        return view('admin.permissions');
    })->name('permissions');

    Route::get('/assign-permissions', function () {
        return view('admin.assign-permissions');
    })->name('assign.permissions');
});

// Simple dashboard for testing
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
    Route::get('/payments/create', [PaymentController::class, 'create'])->name('courses.detail');
});
Route::post('/student/payments', [StudentPaymentController::class, 'store'])->name('student.payments.store');
Route::get('/student/payments', [StudentPaymentController::class, 'index'])->name('student.payments.index');


