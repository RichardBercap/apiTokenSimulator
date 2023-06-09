<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ClienteController;
use \App\Http\Controllers\TokenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api/v1')->group(function () {
    Route::post('storeclient',[ClienteController::class,'create']);
    Route::post('generateToken',[TokenController::class,'generate']);
});
