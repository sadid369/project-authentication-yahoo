<?php

use App\Http\Controllers\UserController;
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
    return view('welcome');
});


Route::view('register', 'register')->name('register');
Route::post('registerSave',[ UserController::class,'register'])->name('registerSave');
Route::view('login', 'login')->name('login');
Route::post('loginMatch', [UserController::class, 'login'])->name('loginMatch');
Route::get('dash', [UserController::class, 'dashboardPage'])->name('dash');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('inner', [UserController::class, 'innerPage'])->name('inner');