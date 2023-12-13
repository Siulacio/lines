<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
});

Route::resource('/employees', EmployeeController::class);

Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [\App\Http\Controllers\AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [\App\Http\Controllers\AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

