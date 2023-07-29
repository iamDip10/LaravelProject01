<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;


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

Route::get('/', [loginController::class, 'index'])->name("login");
Route::post('/', [loginController::class, 'validates'])-> name("login_auth");
Route::get('/signup', [signupController::class, 'index'] )->name("signup");
Route::post('/signup', [signupController::class, 'push'] )->name("signup_push");
Route::get('/dashboard/{obj}', [dashboardController::class,'index'])->name('dashb') ;


