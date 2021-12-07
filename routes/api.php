<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogPostController;

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
        Route::post('/lineup/edit', [LineupController::class, 'update']);
    });

    Route::get('/blogpost', [BlogPostController::class, 'index']);
    Route::get('/lineup', [LineupController::class, 'index']);
});
