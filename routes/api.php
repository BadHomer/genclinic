<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {

});
Route::group(['controller' => AuthenticationController::class], static function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::get('/logout', 'logout');
});

Route::group(['controller' => DoctorController::class, 'prefix' => '/doctors'], static function () {
    Route::get('/', 'index');
    Route::get('/show/{id}', 'show');
    Route::post('/create', 'store');
    Route::post('/update/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
});

Route::group(['controller' => NewsController::class, 'prefix' => '/news'], static function () {
    Route::get('/', 'index');
    Route::get('/show/{id}', 'show');
    Route::post('/create', 'store');
    Route::post('/update/{id}', 'update');
    Route::delete('/delete/{id}', 'destroy');
});
