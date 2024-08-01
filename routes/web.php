<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttendanceController;

Route::resource('users', UserController::class);
Route::resource('attendance', AttendanceController::class);
// Route::get('/', function () {
//     return view('welcome');
// });
