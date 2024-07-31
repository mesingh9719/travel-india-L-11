<?php

use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Support\Facades\Route;
//admin routes

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::middleware('admin.guest')->group(function () {
        Route::get('/login',[AdminAuthController::class,"login"])->name('login');
        Route::post('/login',[AdminAuthController::class,"loginPost"])->name('login.post');
    });
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard',[DashboardController::class,"index"])->name('dashboard');

        //users
        Route::resource('users', UsersController::class);

        //Vehicles
        Route::get('vehicle-types',[VehicleController::class,"vehicleTypes"])->name('vehicle-types');

        // plans
        Route::resource('plans', PlanController::class);

        //logout
        Route::get('/logout',[AdminAuthController::class,"logout"])->name('logout');
    });
});
