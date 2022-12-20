<?php

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


Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::get('project', function () {
    return view('project.index');
})->name('test');

Route::middleware('guest')->group(function () {
    Route::post('login', [\App\Http\Controllers\Auth\AuthenticatedController::class, 'store'])
        ->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [\App\Http\Controllers\Auth\AuthenticatedController::class, 'destroy'])
        ->name('logout');

    Route::prefix('m')->group(function () {
        Route::get('p/{profile}', [\App\Http\Controllers\Manage\ProfileController::class, 'index'])
            ->name('profile.index');
    });
});

