<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    dd("wewe");
    return $request->user();
});

Route::middleware('auth:sanctum')->group(static function () {
    Route::get('/employee', [EmployeeController::class, 'getAllData']);
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});


