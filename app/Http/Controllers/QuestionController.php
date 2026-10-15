<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        // 1. Validasi input dari form
        $request->validate([
            'nama'       => 'required|max:10',
            'email'      => 'required|email',
            'pertanyaan' => 'required|max:300|min:8',
        ], [
            'nama.required'       => 'Nama tidak boleh kosong',
            'email.required'      => 'Email tidak valid',
            'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
        ]);

        // 2. Tangkap data input
        $nama       = $request->input('nama');
        $email      = $request->input('email');
        $pertanyaan = $request->input('pertanyaan');

        // 3. Kirim data ke view menggunakan compact
        return view('home-question-respon', compact('nama', 'email', 'pertanyaan'));
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
