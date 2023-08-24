<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::prefix('/')->group(function () {
    Route::get('/', [LoginController::class, 'Index'])->name('login.Index');
    Route::post('/auth', [LoginController::class, 'AuthUser'])->name('login.auth');
    Route::get('/foradmin', [LoginController::class, 'ForAdmin']);
    Route::get('/logout', [LoginController::class, 'Logout'])->name('login.logout');
});

Route::prefix('/home')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'Index'])->name('home.Index');
});

Route::prefix('UsersControl')->middleware('auth')->group(function (){
    Route::get('/', [UserController::class, 'Index'])->name('user.Index');
    Route::post('/insertnewuser', [UserController::class, 'InsertNewUser'])->name('user.Insert');
});
