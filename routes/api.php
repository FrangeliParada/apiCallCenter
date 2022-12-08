<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BlogController;
use App\Http\Controllers\API\DataController;
use App\Http\Controllers\API\CallCenterClientController;


Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);

Route::middleware('auth:sanctum')->group( function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::put('getUserCallCenter/{id}', [CallCenterClientController::class, 'update']);
    Route::delete('getUserCallCenter/{id}', [CallCenterClientController::class, 'destroy']);
    Route::get('getUserCallCenter', [CallCenterClientController::class, 'show']);
});


