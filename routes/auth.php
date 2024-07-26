<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\StudentAuthController;
use App\Http\Controllers\Auth\TeacherAuthController;
use Illuminate\Support\Facades\Route;

// start admin
Route::prefix('auth/admin')->name('admin.auth.')->middleware('guest')->group(function () {
    Route::get('login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('login', [AdminAuthController::class, 'storeLogin'])->name('login.store');    
});
Route::prefix('auth/admin')->name('admin.auth.')->group(function () {
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
});
// end admin

// start student

Route::prefix('auth/student')->name('student.auth.')->middleware('guest')->group(function () {
    Route::get('login', [StudentAuthController::class, 'login'])->name('login');
    Route::post('login', [StudentAuthController::class, 'storeLogin'])->name('login.store');    
    Route::get('register', [StudentAuthController::class, 'register'])->name('register');
    Route::post('register', [StudentAuthController::class, 'storeRegister'])->name('register.store');
});
// end student

// start teacher
Route::prefix('auth/teacher')->name('teacher.auth.')->middleware('guest')->group(function () {
    Route::get('login', [TeacherAuthController::class, 'login'])->name('login');
    Route::post('login', [TeacherAuthController::class, 'storeLogin'])->name('login.store');    
    Route::get('register', [TeacherAuthController::class, 'register'])->name('register');
    Route::post('register', [TeacherAuthController::class, 'storeRegister'])->name('register.store');
});
// end teacher
