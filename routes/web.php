<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return redirect('/login');
});

Route::get('/login', [
    App\Http\Controllers\LoginController::class, 'login'
]);

Route::get('/sign-up', [
    App\Http\Controllers\SignUpController::class, 'signup'
]);

Route::get('/top', [
    App\Http\Controllers\TopController::class, 'top'
])
->middleware('auth');

Route::resource('wifi-spots', App\Http\Controllers\WifiSpotController::class)
->middleware('auth');

Route::resource('restaurants', App\Http\Controllers\RestaurantController::class)
->middleware('auth');

Route::resource('hot-springs', App\Http\Controllers\HotspringController::class)
->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
