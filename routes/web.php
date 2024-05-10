<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get ('/salam', function(){
    return"Assalamualaikum STTNF, Selamat berajar Laravel 11";
});

Route::get('/profile', function(){
    return view('profile');
});
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/laporan', [DashboardController::class, 'laporan']);