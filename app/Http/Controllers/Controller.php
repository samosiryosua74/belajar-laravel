<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Fungsi login sesuai materi di gambar
    public function login(Request $request)
    {
        // 1. Melihat semua data yang dikirim dari form/ajax
        dd($request->all());

        // 2. Atau mengambil data spesifik
        // $username = $request->input('username');
        // $password = $request->input('password');
    }
}
=======
abstract class Controller
{
    //
}
>>>>>>> ba5fca1abc89e2fab92fd366787567bf06174d67
