<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registro', function () {
    return view('registro');
});

Route::post('/confirmacion', [UserController::class, 'store'])->name('users.store');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

