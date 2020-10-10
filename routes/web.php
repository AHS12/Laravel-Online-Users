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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::group(['middleware' => ['auth','activitytLog']], function () {
//activitylog middleware is for auto logging


//default method users
Route::get('/users', [App\Http\Controllers\UserActivityController::class, 'index']);

//package users
Route::get('/users/logs',[App\Http\Controllers\UserActivityController::class, 'userLogs']);
 
});

