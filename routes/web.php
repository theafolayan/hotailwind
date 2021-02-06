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


Route::name('admin')->prefix('admin')->middleware('admin')->group( function () {
    Route::get('/dashboard', function () {
        return 'hello';
    });

    Route::get('rooms', function () {
        // Uses first & second Middleware
           return 'rooms';
    });
    Route::get('/reservations', function () {
        return 'reservations';
    });
});


Route::get('rooms', [\App\Http\Controllers\FrontendController::class, 'getRooms'])->name('rooms');
