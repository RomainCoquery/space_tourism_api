<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DestinationController;
use App\Http\Controllers\Api\CrewController;
use App\Http\Controllers\Api\TechnologyController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('destinations', DestinationController::class);
Route::resource('crews', CrewController::class);
Route::resource('technologies', TechnologyController::class);