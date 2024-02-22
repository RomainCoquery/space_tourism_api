<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DestinationController;
use App\Http\Controllers\Api\CrewController;
use App\Http\Controllers\Api\TechnologyController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;


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

// Public accessible API
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('destinations', [DestinationController::class, 'index']);
Route::get('destinations/{destination}', [DestinationController::class, 'show']);
Route::get('crews', [CrewController::class, 'index']);
Route::get('crews/{crew}', [CrewController::class, 'show']);
Route::get('technologies', [TechnologyController::class, 'index']);
Route::get('technologies/{technology}', [TechnologyController::class, 'show']);

// Authenticated only API
// We use auth api here as a middleware so only authenticated user who can access the endpoint
// We use group so we can apply middleware auth api to all the routes within the group
Route::middleware('auth:api')->group(function() {
    Route::get('/me', [UserController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('destinations', DestinationController::class)->except(['index', 'show']);
    Route::resource('crews', CrewController::class)->except(['index', 'show']);
    Route::resource('technologies', TechnologyController::class)->except(['index', 'show']);
});