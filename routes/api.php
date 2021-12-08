<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\AthleteController;
use App\Http\Controllers\WeekController;
use App\Http\Controllers\LineupController;

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

Route::prefix('v1')->group(function () {
    Route::middleware('auth:api')->group(function () {
        Route::get('/user', [UserController::class, 'user']);

        Route::apiResource('/users', UserController::class);
        Route::apiResource('/logout', UserController::class);
        Route::post('/blogpost/edit', [BlogPostController::class, 'update']);
        Route::post('/week/edit', [WeekController::class, 'update']);
        Route::post('/athlete/edit', [AthleteController::class, 'update']);
        Route::post('/lineup/edit', [LineupController::class, 'update']);
    });

    Route::get('/blogpost', [BlogPostController::class, 'index']);
    Route::get('/lineup', [LineupController::class, 'index']);
    Route::get('/week', [WeekController::class, 'index']);
    Route::get('/athlete', [AthleteController::class, 'index']);
});
