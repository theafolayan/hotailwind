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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::name('admin.')->prefix('admin')->middleware('admin')->group( function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'showDashboard'])->name('dashboard');
    Route::get('/rooms', [\App\Http\Controllers\AdminController::class, 'showRooms'])->name('rooms');
    Route::get('/create-room', [\App\Http\Controllers\AdminController::class, 'createRoom'])->name('create-room');
    Route::get('/edit-room/{room}', [\App\Http\Controllers\AdminController::class, 'showDashboard'])->name('edit-room');
    Route::delete('/{room}/delete', [\App\Http\Controllers\AdminController::class, 'deleteRoom']);


    /// Reservations
    Route::get('/reservations', [\App\Http\Controllers\AdminController::class, 'showDashboard'])->name('reservations');
    Route::get('/create-reservation', [\App\Http\Controllers\AdminController::class, 'showDashboard'])->name('create-reservation');
    // Route::get('/edit-reservation', [\App\Http\Controllers\AdminController::class, ''])->name('edit-reservation');


    // Post Routes

    Route::post('/store-room',
    [\App\Http\Controllers\AdminController::class, 'storeRoom'])->name('store-room');
});


Route::get('rooms', [\App\Http\Controllers\FrontendController::class, 'getRooms'])->name('rooms');
