<?php

use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AssignmentController;
 use App\Http\Controllers\RolePermissionController;
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
        Route::resource('vehicles', VehicleController::class);

        Route::get('vehicle-types',[VehicleController::class,"vehicleTypes"])->name('vehicle-types');

        // plans
        Route::resource('plans', PlanController::class);

        // Role Routes
        Route::prefix('roles')->group(function () {
            Route::get('/', [RolePermissionController::class, 'rolesIndex'])->name('roles.index');
            Route::get('create', [RolePermissionController::class, 'rolesCreate'])->name('roles.create');
            Route::post('/', [RolePermissionController::class, 'rolesStore'])->name('roles.store');
            Route::get('{id}/edit', [RolePermissionController::class, 'rolesEdit'])->name('roles.edit');
            Route::put('{id}', [RolePermissionController::class, 'rolesUpdate'])->name('roles.update');
            Route::delete('{id}', [RolePermissionController::class, 'rolesDestroy'])->name('roles.destroy');
            Route::post('assignments', [RolePermissionController::class, 'assignPermissionsToRole'])->name('roles.assignments.show');
            Route::put('{id}/assignments', [RolePermissionController::class, 'updateRolePermissions'])->name('roles.assignments.update');
            Route::get('/assign', [RolePermissionController::class, 'assign'])->name('permissions.assign');
        });

        // Permission Routes
        Route::prefix('permissions')->group(function () {
            Route::get('/', [RolePermissionController::class, 'permissionsIndex'])->name('permissions.index');
            Route::get('create', [RolePermissionController::class, 'permissionsCreate'])->name('permissions.create');
            Route::post('/', [RolePermissionController::class, 'permissionsStore'])->name('permissions.store');
            Route::get('{id}/edit', [RolePermissionController::class, 'permissionsEdit'])->name('permissions.edit');
            Route::put('{id}', [RolePermissionController::class, 'permissionsUpdate'])->name('permissions.update');
            Route::delete('{id}', [RolePermissionController::class, 'permissionsDestroy'])->name('permissions.destroy');
            
        });

        //settings
        Route::get('general-settings',[GeneralSettingController::class,"index"])->name('general-settings');
        Route::post('general-settings',[GeneralSettingController::class,"update"])->name('general-settings.update');
        Route::resource('email-settings', EmailController::class);
        Route::resource('payment-settings', PaymentController::class);
        //logout
        Route::get('/logout',[AdminAuthController::class,"logout"])->name('logout');
    });
});
