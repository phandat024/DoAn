<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\authController;
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
Route::get('login',[authController::class,'login'])->name('login');
Route::get('register',[authController::class,'register'])->name('register');
Route::get('homepage', [authController::class, 'homepage'])->name('homepage');

Route::get('enrollRegister', [authController::class, 'enrollRegister'])->name('enrollRegister');
Route::post('login', [authController::class, 'loginIn'])->name('loginIn');

Route::get('signout', [authController::class, 'signOut'])->name('signout');

