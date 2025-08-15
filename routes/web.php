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
use App\Http\Controllers\Admin\RoleController;


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
    Route::middleware(['auth', 'role:teacher'])->prefix('teacher')->name('teacher.')->group(function () {
    Route::resource('courses', \App\Http\Controllers\Teacher\CourseController::class);
    Route::prefix('teacher')->name('teacher.')->middleware('auth','role:teacher')->group(function () {
    Route::resource('assignments', App\Http\Controllers\Teacher\AssignmentController::class);
});

});

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
    Route::post('/process', [PaymentController::class, 'process'])->name('process');
    Route::get('/gateway', [PaymentController::class, 'gateway'])->name('gateway');
    Route::get('/success', [PaymentController::class, 'success'])->name('success');
    Route::post('/create-checkout-session', [PaymentController::class, 'createCheckoutSession']);
    

    // Route::get('/grades', [GradeController::class, 'view'])->name('grades');
// Payment Gateway Page (new)
Route::get('/payments/gateway', [PaymentController::class, 'gateway'])->name('payments.gateway');
// Show payment form


Route::get('/payments/{id}/receipt', [PaymentController::class, 'downloadReceipt'])
     ->name('payments.receipt');

Route::get('/payments/{id}/success', [PaymentController::class, 'paymentSuccess'])
    ->name('payments.success');





Route::post('/payments/index', [PaymentController::class, 'index'])
    ->name('payments.index');
// Process payment (AJAX)
Route::post('/payments/process', [PaymentController::class, 'processPayment'])->name('payments.process');


});



Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    // Admin dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // User management
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    
    // Role management
    Route::get('/roles', [RoleController::class, 'index'])->name('admin.roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('admin.roles.create');
    Route::post('/roles/store', [RoleController::class, 'store'])->name('admin.roles.store');
    Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('admin.roles.edit');
    Route::put('/roles/{role}/update', [RoleController::class, 'update'])->name('admin.roles.update');
    Route::delete('/roles/{role}/destroy', [RoleController::class, 'destroy'])->name('admin.roles.destroy');
    Route::post('/roles/{role}/permissions', [RoleController::class, 'assignPermissions'])->name('admin.roles.permissions');
    Route::get('/roles/{role}/permissions', [RoleController::class, 'permissions'])->name('admin.roles.permissions.show');
    Route::post('/roles/{role}/permissions/store', [RoleController::class, 'storePermissions'])->name('admin.roles.permissions.store');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'removePermission'])->name('admin.roles.permissions.remove');
    Route::get('/roles/{role}/assign', [RoleController::class, 'assign'])->name('admin.roles.assign');

    // Permission management
    Route::get('/permissions', [AdminController::class, 'permissions'])->name('admin.permissions');
    Route::get('/assign-permissions', [AdminController::class, 'assignPermissions'])->name('admin.permissions.assign');
});
