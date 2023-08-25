<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\PaymentController;
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
    Route::get('/actions', [UserController::class, 'Actions'])->name('user.Actions');
    Route::get('/deleteuser/{id}', [UserController::class, 'DeleteUser'])->name('user.Deleteuser');
    Route::get('/updateuser/{id}', [UserController::class, 'UpdateUser'])->name('user.Updateuser');
    Route::put('/updateoneuser/{id}', [UserController::class, 'UpdateOneUser'])->name('user.Updateoneuser');
});

Route::prefix('System')->middleware('auth')->group(function () {
    Route::get('/', [SystemController::class, 'Index'])->name('system.Index');
    Route::post('/insertsystem', [SystemController::class, 'InsertSystem'])->name('system.Insertsystem');
    Route::get('/systemactions', [SystemController::class, 'Systems'])->name('system.Systems');
    Route::get('/deletesystem/{id}', [SystemController::class, 'DeleteSystem'])->name('system.Deletesystem');
    Route::get('/updatesystem/{id}', [SystemController::class, 'UpdateSystem'])->name('system.Updatesystem');
    Route::put('/updateonesystem/{id}', [SystemController::class, 'UpdateOneSystem'])->name('system.Updateonesystem');
});

Route::prefix('Payment')->middleware('auth')->group(function () {
    Route::get('/', [PaymentController::class, 'Index'])->name('payment.Index');
    Route::post('/insertpayment', [PaymentController::class, 'InsertPayment'])->name('payment.Insertpayment');
    Route::get('/paymentsactions', [PaymentController::class, 'Payments'])->name('payment.Actions');
});
