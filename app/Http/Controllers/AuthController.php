<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // 1. Melihat semua data yang dikirim (sesuai materi dd)
        // dd($request->all());

        // 2. Mengambil spesifik input
        $username = $request->input('username');
        $password = $request->input('password');

        return "Data berhasil ditangkap! Username: " . $username . " | Password: " . $password;
    }
}