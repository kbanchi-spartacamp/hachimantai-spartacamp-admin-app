<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['api']], function () {
    Route::get('/wifi-spots', [App\Http\Controllers\Api\WifiSpotController::class, 'index']);
    Route::get('/wifi-spots/{wifi_spot}', [App\Http\Controllers\Api\WifiSpotController::class, 'show']);
    Route::get('/restaurants', [App\Http\Controllers\Api\RestaurantController::class, 'index']);
    Route::get('/restaurants/{restaurant}', [App\Http\Controllers\Api\RestaurantController::class, 'show']);
    Route::get('/hot-springs', [App\Http\Controllers\Api\HotspringController::class, 'index']);
    Route::get('/hot-springs/{hot_spring}', [App\Http\Controllers\Api\HotspringController::class, 'show']);
});
