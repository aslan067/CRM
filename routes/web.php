<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
