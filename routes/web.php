<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\AuthController; // <-- Tambahkan baris ini

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/nama/yosua', function () {
    return 'Nama saya: yosua';
});

Route::get('/nim/{param1?}', function ($param1 = '2555301184') {
    return 'NIM saya: ' . $param1;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

// 1. Tampilkan form login
Route::get('/form-login', function () {
    return view('form-login');
});

// 2. Arahkan proses login ke AuthController
Route::post('/proses-login', [AuthController::class, 'login']);