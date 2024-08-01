<?php

use App\Http\Controllers\Frontend\CarContoller;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\RideController;
use Illuminate\Support\Facades\Route;


//Frontend route
Route::get('/',[CarContoller::class,"cars"])->name('cars');
Route::get('/car-list',[CarContoller::class,"carsProfile"])->name('car.profile');
Route::get('/car-details',[CarContoller::class,"carsDetails"])->name('car.details');
Route::get('/create-route-notification',[CarContoller::class,"createRouteNotification"])->name('create.route.notification');
Route::get('/submit-car-intro',[CarContoller::class,"submitCarIntro"])->name('submit.car.intro');
Route::get('/submit-car-for-rent',[CarContoller::class,"submitCarForRent"])->name('submit.car.for.rent');
Route::get('/submit-route',[CarContoller::class,"submitRoute"])->name('submit.route');
//User routes
Route::get('/register',[UserController::class,"register"])->name('register');
Route::get('/login',[UserController::class,"login"])->name('login');
Route::get('/user-profile',[UserController::class,"userProfile"])->name('user.profile');
Route::get('/profile-balance',[UserController::class,"profileBalance"])->name('profile.balance');
Route::get('/profile-earning',[UserController::class,"profileEarning"])->name('profile.earning');
Route::get('/profile-edit',[UserController::class,"profileEdit"])->name('profile.edit');
//Ride listing routes
Route::get('/ride-list',[RideController::class,"rideListing"])->name('ride.list');
Route::get('/ride-request',[RideController::class,"rideRequest"])->name('ride.request');
Route::get('/ride-detail',[RideController::class,"rideDetail"])->name('ride.detail');
Route::get('/ride-requests-list',[RideController::class,"rideRequestsList"])->name('ride.requests.list');

//End frontend route

include __DIR__.'/admin.php';
