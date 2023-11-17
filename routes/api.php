<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'admin'], function () {
    Route::post('token', [\App\Http\Controllers\Api\Admin\AuthController::class, 'token']);

    Route::group(['middleware' => 'auth:sanctum_admin'], function () {
        Route::get('/user', [\App\Http\Controllers\Api\Admin\AuthController::class, 'user']);
        Route::apiResource('admins', \App\Http\Controllers\Api\Admin\AdminController::class);
        Route::apiResource('customers', \App\Http\Controllers\Api\Admin\ManageCustomerController::class);
        Route::apiResource('transactions', \App\Http\Controllers\Api\Admin\TransactionController::class);
        Route::apiResource('payments', \App\Http\Controllers\Api\Admin\PaymentController::class);
        Route::apiResource('reports', \App\Http\Controllers\Api\Admin\ReportController::class)->only(['create', 'store']);
    });
});
Route::group(['prefix' => 'customer'], function () {
    Route::post('token', [\App\Http\Controllers\Api\Customer\AuthController::class, 'token']);

    Route::group(['middleware' => 'auth:sanctum_customer'], function () {
        Route::get('/user', [\App\Http\Controllers\Api\Customer\AuthController::class, 'user']);
        Route::apiResource('transactions', \App\Http\Controllers\Api\Customer\TransactionController::class)->only('index');
    });
});
