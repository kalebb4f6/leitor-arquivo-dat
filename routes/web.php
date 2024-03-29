<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[\App\Http\Controllers\DashboardController::class, 'index']);
Route::post('/upload',[\App\Http\Controllers\DashboardController::class, 'upload']);
Route::get('/get-out-file', [\App\Http\Controllers\DashboardController::class, 'getOutFile']);
