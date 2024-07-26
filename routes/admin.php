<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\Users\AdminsController;
use App\Http\Controllers\Admin\Users\StudentController;
use App\Http\Controllers\Admin\Users\TeacherController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'Dashboard'])->name('/');
    Route::resource('admins',AdminsController::class);
    Route::resource('student',StudentController::class);
    Route::resource('teacher',TeacherController::class);
    Route::resource('roles', RoleController::class);
});