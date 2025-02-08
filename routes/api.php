<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/employee', [EmployeeController::class, 'getAllData']);
