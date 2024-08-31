<?php

use App\Http\Controllers\Frontend\Auth\UserAuthController;
use App\Http\Controllers\Frontend\CancelBookingsController;
use App\Http\Controllers\Frontend\DLController;
use App\Http\Controllers\Frontend\DriverTripController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PaymentHistoryController;
use App\Http\Controllers\Frontend\RegistrationController;
use App\Http\Controllers\Frontend\RideController;
use App\Http\Controllers\Frontend\TotalBookingsController;
use App\Http\Controllers\Frontend\TripController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\UserSettingsController;
use App\Http\Controllers\Frontend\VehicleController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [HomeController::class, "index"])->name('index');

Route::resource('/register', RegistrationController::class);

Route::middleware(['guest'])->group(function () {
    Route::post('/send-otp', [UserAuthController::class, "sendOtp"])->name('login.send-otp');

    Route::post('/verify-otp', [UserAuthController::class, "verifyOtp"])->name('login.verify-otp');
});

// auth users
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/dashboard', UserDashboardController::class);

    Route::resource('/driving-license', DLController::class);

    Route::resource('/rides', RideController::class);

    Route::resource('/vehicle', VehicleController::class);

    Route::resource('/profile', UserProfileController::class);

    Route::resource('/total-bookings', TotalBookingsController::class);

    Route::resource('/cancel-bookings', CancelBookingsController::class);

    Route::resource('/payment-history', PaymentHistoryController::class);

    Route::resource('/user-setting', UserSettingsController::class);

    Route::post('/logout', [UserAuthController::class, 'logout'])->name('logout');
});


Route::get('/find-ride', [TripController::class, "findRide"])->name('find-ride');

Route::get('/add-trip', [DriverTripController::class, "create"])->name('add.trip');

Route::get('driver-info/{id}', [UserController::class, "driverInfo"])->name('driver.info');


//Admin Routes
include __DIR__ . '/admin.php';
