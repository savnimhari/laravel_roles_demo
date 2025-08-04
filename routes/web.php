<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Teacher\CourseController;
use App\Http\Controllers\Teacher\AssignmentController;
use App\Http\Controllers\StripeController;


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
    // Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    
    // Additional admin-only routes can be added here
});

// Teacher Routes
Route::prefix('teacher')->middleware(['auth', 'verified', 'role:teacher'])->name('teacher.')->group(function () {
    Route::resource('courses', \App\Http\Controllers\Teacher\CourseController::class);
    Route::resource('assignments', \App\Http\Controllers\Teacher\AssignmentController::class);
    
    // Route::prefix('grades')->group(function () {
    //     Route::get('/', [\App\Http\Controllers\Teacher\GradeController::class, 'index'])->name('grades.index');
    //     Route::post('/', [\App\Http\Controllers\Teacher\GradeController::class, 'store'])->name('grades.store');
    //     // Route::get('/create', [\App\Http\Controllers\Teacher\GradeController::class, 'create'])->name('grades.create');
    // });
});

// Student Routes
Route::prefix('student')->middleware(['auth', 'verified', 'role:student'])->name('student.')->group(function () {
    
    // Route::resource('payments', \App\Http\Controllers\Student\PaymentController::class)->only([
    //     'index', 'create', 'store', 'show'
    // ]);
});

// Registrar Routes
Route::prefix('registrar')->middleware(['auth', 'verified', 'role:registrar'])->name('registrar.')->group(function () {
    Route::resource('registrations', \App\Http\Controllers\Registrar\RegistrationController::class);
    
    // Route::prefix('reports')->group(function () {
    //     // Route::get('/', [\App\Http\Controllers\Registrar\ReportController::class, 'index'])->name('reports.index');
    //     Route::post('/generate', [\App\Http\Controllers\Registrar\ReportController::class, 'generate'])->name('reports.generate');
    //     Route::get('/export', [\App\Http\Controllers\Registrar\ReportController::class, 'export'])->name('reports.export');
    // });
    
    // Route::resource('courses', \App\Http\Controllers\Registrar\CourseController::class)->only([
    //     'index', 'show', 'edit', 'update'
    // ]);
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/users', [AdminController::class, 'manageUsers'])->name('users');
    // Route::get('/roles', [AdminController::class, 'manageRoles'])->name('roles');
    Route::get('/permissions', [AdminController::class, 'managePermissions'])->name('permissions');
});

/*
|--------------------------------------------------------------------------
| Teacher Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:teacher'])->prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/courses', [TeacherController::class, 'myCourses'])->name('courses');
    Route::get('/assignments', [TeacherController::class, 'manageAssignments'])->name('assignments');
    Route::get('/grades', [TeacherController::class, 'submitGrades'])->name('grades');
});

/*
|--------------------------------------------------------------------------
| Registrar Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:registrar'])->prefix('registrar')->name('registrar.')->group(function () {
    Route::get('/students', [RegistrarController::class, 'studentRecords'])->name('students');
    Route::get('/courses', [RegistrarController::class, 'courseManagement'])->name('courses');
    Route::get('/reports', [RegistrarController::class, 'generateReports'])->name('reports');
});

/*
|--------------------------------------------------------------------------
| Student Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:student'])->prefix('payments')->name('payments.')->group(function () {
    Route::get('/index', [PaymentController::class, 'index'])->name('index');
    Route::get('/create', [PaymentController::class, 'create'])->name('create');
    Route::get('/detail', [PaymentController::class, 'detail'])->name('detail');
    Route::get('/edit', [PaymentController::class, 'edit'])->name('edit');
    Route::post('/process', [PaymentController::class, 'store'])->name('store');

    // Route::get('/grades', [GradeController::class, 'view'])->name('grades');
});
// Add these to your routes/web.php

Route::get('/payments/index', [PaymentController::class, 'showPaymentForm'])
     ->name('payments.index');

Route::post('/payments/process', [PaymentController::class, 'processPayment'])
     ->name('payments.process');



// Show payment form
Route::get('/payments/index', [StripeController::class, 'showPaymentForm'])->name('payments.index');

// Process payment (AJAX)
Route::post('/payments/process', [StripeController::class, 'processPayment'])->name('payments.process');
