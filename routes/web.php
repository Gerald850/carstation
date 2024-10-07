<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registro', function () {
    return view('registro');
});

Route::post('/confirmacion', [UserController::class, 'store'])->name('users.store');
