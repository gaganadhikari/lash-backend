<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\PackageController;
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

Route::get('/packages',[PackageController::class, 'index']);
Route::get('/gallery',[GallaryController::class, 'index']);

Route::group(['prefix' => 'appointment', 'as'=>'appointment.' ], function () {
    Route::get('/', [AppointmentController::class, 'index'] );
    Route::post('/', [AppointmentController::class, 'store'] );
    Route::post('/{id}', [AppointmentController::class, 'update'] );
    Route::get('/{id}', [AppointmentController::class, 'show'] );
});
