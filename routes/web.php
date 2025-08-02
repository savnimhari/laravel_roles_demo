<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public routes
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
    return view('auth.login');
})->name('login');

// Auth routes
require __DIR__.'/auth.php';

// Profile routes (authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'verified', 'role:admin'])->name('admin.')->group(function () {
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    
    // Additional admin-only routes can be added here
});

// Teacher Routes
Route::prefix('teacher')->middleware(['auth', 'verified', 'role:teacher'])->name('teacher.')->group(function () {
    Route::resource('courses', \App\Http\Controllers\Teacher\CourseController::class);
    Route::resource('assignments', \App\Http\Controllers\Teacher\AssignmentController::class);
    
    Route::prefix('grades')->group(function () {
        Route::get('/', [\App\Http\Controllers\Teacher\GradeController::class, 'index'])->name('grades.index');
        Route::post('/', [\App\Http\Controllers\Teacher\GradeController::class, 'store'])->name('grades.store');
        Route::get('/create', [\App\Http\Controllers\Teacher\GradeController::class, 'create'])->name('grades.create');
    });
});

// Student Routes
Route::prefix('student')->middleware(['auth', 'verified', 'role:student'])->name('student.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Student\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/courses', [\App\Http\Controllers\Student\CourseController::class, 'index'])->name('courses.index');
    Route::get('/grades', [\App\Http\Controllers\Student\GradeController::class, 'index'])->name('grades.index');
    
    Route::resource('payments', \App\Http\Controllers\Student\PaymentController::class)->only([
        'index', 'create', 'store', 'show'
    ]);
});

// Registrar Routes
Route::prefix('registrar')->middleware(['auth', 'verified', 'role:registrar'])->name('registrar.')->group(function () {
    Route::resource('registrations', \App\Http\Controllers\Registrar\RegistrationController::class);
    
    Route::prefix('reports')->group(function () {
        Route::get('/', [\App\Http\Controllers\Registrar\ReportController::class, 'index'])->name('reports.index');
        Route::post('/generate', [\App\Http\Controllers\Registrar\ReportController::class, 'generate'])->name('reports.generate');
        Route::get('/export', [\App\Http\Controllers\Registrar\ReportController::class, 'export'])->name('reports.export');
    });
    
    Route::resource('courses', \App\Http\Controllers\Registrar\CourseController::class)->only([
        'index', 'show', 'edit', 'update'
    ]);
});