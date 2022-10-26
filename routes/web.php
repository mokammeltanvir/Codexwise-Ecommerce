<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('frontend.pages.home');
});

/**
 * Admin Auth Routes ->
 */
Route::prefix('admin/')->group(function () {
    Route::get('login', [LoginController::class, 'loginPage'])->name('admin.loginpage');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    });
});

/**
 * Admin Auth Routes <-
 */

Route::get('admin/dashboard', function () {
    return view('backend.pages.dashboard');
});
