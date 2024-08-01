<?php

use App\Http\Controllers\Api\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;


Route::controller(RegisterController::class)->group(function(){
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user-list',[RegisterController::class, "index"])->name('user.list');
    Route::resource('/vehicle', VehicleController::class);
    Route::post('/logout',[RegisterController::class, "logout"])->name('logout');
});
