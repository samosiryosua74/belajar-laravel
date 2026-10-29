<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Fungsi login sesuai materi di gambar
    public function login(Request $request)
    {
        dd($request->all());
    }
}