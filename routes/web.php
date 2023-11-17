<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => 'guest:admin'], function () {
        Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [App\Http\Controllers\Admin\LoginController::class, 'login']);
    });
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('admins', \App\Http\Controllers\Admin\AdminController::class);
        Route::resource('customers', \App\Http\Controllers\Admin\ManageCustomerController::class);
        Route::resource('transactions', \App\Http\Controllers\Admin\TransactionController::class)->only(['index', 'create', 'store']);
        Route::resource('payments', \App\Http\Controllers\Admin\PaymentController::class)->only(['index', 'create', 'store']);
        Route::resource('reports', \App\Http\Controllers\Admin\ReportController::class)->only(['create', 'store']);
    });
});

Route::group(['middleware' => 'guest', 'prefix' => 'customer', 'as' => 'customer.'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/login', [\App\Http\Controllers\Customer\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [\App\Http\Controllers\Customer\LoginController::class, 'login']);
    });
    Route::group(['middleware' => 'auth:customer'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\Customer\CustomerController::class, 'dashboard'])->name('dashboard');
        Route::get('transactions', [\App\Http\Controllers\Customer\CustomerController::class, 'transactions'])->name('transactions.index');
    });
});


Auth::routes();

