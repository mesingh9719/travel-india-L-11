<?php

use App\Http\Controllers\Frontend\CarContoller;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TripController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\RideController;
use App\Http\Controllers\Frontend\RegistrationController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\TotalBookingsController;
use App\Http\Controllers\Frontend\CancelBookingsController;
use App\Http\Controllers\Frontend\PaymentHistoryController;
use App\Http\Controllers\Frontend\UserSettingsController;
use App\Http\Controllers\Frontend\DriverTripController;
use App\Http\Controllers\Frontend\VehicleController;
use App\Http\Controllers\Frontend\DLController;

use Illuminate\Support\Facades\Route;


//Frontend route
Route::get('/',[HomeController::class,"index"])->name('index');
Route::get('/trip',[TripController::class,"trip"])->name('trip');
Route::get('/trip-detail/{id}',[TripController::class,"tripDetail"])->name('trip.detail');

//Driver trip route
Route::get('/add-trip',[DriverTripController::class,"create"])->name('add.trip');
Route::get('trip-list', [DriverTripController::class, 'index'])->name('trip.list');

//dl route
Route::resource('/driving-license', DLController::class);
//vehicle route
Route::resource('/vehicle', VehicleController::class);

//about us
Route::get('/about-us',[HomeController::class,"aboutUs"])->name('about.us');

Route::get('/car-details',[CarContoller::class,"carsDetails"])->name('car.details');
Route::get('/create-route-notification',[CarContoller::class,"createRouteNotification"])->name('create.route.notification');
Route::get('/submit-car-intro',[CarContoller::class,"submitCarIntro"])->name('submit.car.intro');
Route::get('/submit-car-for-rent',[CarContoller::class,"submitCarForRent"])->name('submit.car.for.rent');
Route::get('/submit-route',[CarContoller::class,"submitRoute"])->name('submit.route');

//User routes
Route::resource('/register', RegistrationController::class);
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

//contact-us route
Route::resource('contact', ContactController::class);
Route::get('driver-info/{id}',[UserController::class,"driverInfo"])->name('driver.info');
//Owner or Driver Dashboard routes
Route::resource('/dashboard', UserDashboardController::class);
Route::resource('/profile', UserProfileController::class);
Route::resource('/total-bookings', TotalBookingsController::class);
Route::resource('/cancel-bookings', CancelBookingsController::class);
Route::resource('/payment-history', PaymentHistoryController::class);
Route::resource('/user-setting', UserSettingsController::class);

//End Owner or Driver Dashboard routes
//End frontend route


include __DIR__.'/admin.php';
