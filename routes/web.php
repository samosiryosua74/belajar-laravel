<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortofolioController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('portofolio', PortofolioController::class);
Route::get('/uts', [DashboardController::class, 'index']);
