<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;

Route::prefix('auth')->group(static function () {
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth:sanctum')->group(static function () {
    Route::get('/employee', [EmployeeController::class, 'getAllData']);
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});


