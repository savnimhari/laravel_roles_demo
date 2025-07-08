<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegistrarController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/login', function () {
    return view('welcome');
});


// ✅ Shared dashboard route for all roles
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ Admin-only management routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    Route::post('/users/store', [AdminController::class, 'storeUser'])->name('users.store');
    Route::get('/users/{user}/edit', [AdminController::class, 'editUser'])->name('users.edit');
    Route::patch('/users/{user}', [AdminController::class, 'updateUser'])->name('users.update');
    Route::delete('/users/{user}', [AdminController::class, 'destroyUser'])->name('users.destroy');

    Route::get('/roles', [AdminController::class, 'roles'])->name('roles');
    Route::post('/roles/store', [AdminController::class, 'storeRole'])->name('roles.store');
    Route::get('/roles/{role}/edit', [AdminController::class, 'editRole'])->name('roles.edit');
    Route::patch('/roles/{role}', [AdminController::class, 'updateRole'])->name('roles.update');
    Route::delete('/roles/{role}', [AdminController::class, 'destroyRole'])->name('roles.destroy');

    Route::get('/permissions', [AdminController::class, 'permissions'])->name('permissions');
    Route::post('/permissions/store', [AdminController::class, 'storePermission'])->name('permissions.store');
    Route::get('/permissions/{permission}/edit', [AdminController::class, 'editPermission'])->name('permissions.edit');
    Route::patch('/permissions/{permission}', [AdminController::class, 'updatePermission'])->name('permissions.update');
    Route::delete('/permissions/{permission}', [AdminController::class, 'destroyPermission'])->name('permissions.destroy');

    Route::get('/assign-permissions', [AdminController::class, 'assignPermissions'])->name('assign.permissions');
    Route::post('/assign-permissions/store', [AdminController::class, 'storeAssignedPermissions'])->name('assign.permissions.store');
});

// ✅ Authenticated user profile (all roles)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Auth routes like login, register, forgot password, etc.
require __DIR__.'/auth.php';
