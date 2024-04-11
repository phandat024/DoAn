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
Route::post('loginIn', [authController::class, 'loginIn'])->name('loginIn');

Route::get('register',[authController::class,'register'])->name('register');
Route::get('enrollRegister', [authController::class, 'enrollRegister'])->name('enrollRegister');


Route::get('signout', [authController::class, 'signOut'])->name('signout');

Route::get('list', [authController::class, 'list'])->name('list');