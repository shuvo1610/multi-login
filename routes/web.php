<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//login route
Route::get('/', [AuthController::class,'loginPage'])->name('login');
Route::post('user-login', [AuthController::class,'postlogin'])->name('user.login');

//registration route
Route::get('user-registration', [AuthController::class, 'registration'])->name('user.registration');
Route::post('user-store', [AuthController::class, 'store'])->name('user.store');


//dashboard route
Route::get('admin-dashboard', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('user-dashboard', [AuthController::class, 'userDashboard'])->name('user.dashboard');
Route::get('company-dashboard', [AuthController::class, 'companyDashboard'])->name('company.dashboard');

