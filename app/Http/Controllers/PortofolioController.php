<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('admin.show', compact('portofolios'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cv');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // 1. Validasi inputan agar aman
    $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'posisi_keahlian' => 'required|string|max:255',
        'tentang_saya' => 'required',
        'pendidikan' => 'required|string|max:255',
        'pengalaman_kerja' => 'required|string|max:255',
        'gambar_portofolio' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Batas 2MB
    ]);

    // 2. Ambil semua data text dari form
    $data = $request->all();

    // 3. Proses upload GAMBAR PORTFOLIO (Untuk Bonus Nilai)
    if ($request->hasFile('gambar_portofolio')) {
        $file = $request->file('gambar_portofolio');
        $nama_gambar = time() . '_' . $file->getClientOriginalName();
        // Simpan gambar ke folder public/img bawaan template kamu
        $file->move(public_path('img'), $nama_gambar);

        // Masukkan nama filenya ke array data
        $data['gambar_portofolio'] = $nama_gambar;
    }

    // 4. Masukkan data ke database melalui Model Portofolio
    \App\Models\Portofolio::create($data);

    // 5. Kembalikan halaman dengan pesan sukses
    return redirect()->route('portofolio.index')->with('success', 'Data CV Portofolio berhasil disimpan!');
}

    /**
     * Display the specified resource.
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Ambil data CV lama yang mau diedit berdasarkan ID
    $portofolio = \App\Models\Portofolio::findOrFail($id);

    // Buka file form edit yang baru dibuat tadi
    return view('admin.edit', compact('portofolio'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validasi data
    $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'posisi_keahlian' => 'required|string|max:255',
        'tentang_saya' => 'required',
        'pendidikan' => 'required|string|max:255',
        'pengalaman_kerja' => 'required|string|max:255',
        'gambar_portofolio' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $portofolio = \App\Models\Portofolio::findOrFail($id);
    $data = $request->all();

    // Jika ada upload foto profil baru
    if ($request->hasFile('gambar_portofolio')) {
        // Hapus foto lama agar tidak menimbun storage lokal
        if ($portofolio->gambar_portofolio && file_exists(public_path('img/' . $portofolio->gambar_portofolio))) {
            unlink(public_path('img/' . $portofolio->gambar_portofolio));
        }

        $file = $request->file('gambar_portofolio');
        $nama_gambar = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('img'), $nama_gambar);
        $data['gambar_portofolio'] = $nama_gambar;
    }

    // Update data ke tabel database portofolio_0436
    $portofolio->update($data);

    // Setelah beres, kembalikan user ke halaman preview kertas CV-nya yang sudah terupdate
    return redirect('/portofolio')->with('success', 'Data CV berhasil diperbarui!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // 1. Cari data berdasarkan ID di database portofolio_0436
    $portofolio = \App\Models\Portofolio::find($id);

    // 2. Jika datanya ada, hapus secara permanen
    if ($portofolio) {
        $portofolio->delete();
    }

    // 3. PAS KAN TUJUANNYA: Alihkan kembali ke halaman FORM INPUT DATA (Create)
    return redirect('/portofolio/create')->with('success', 'Data CV lama berhasil dihapus! Silakan buat baru.');
}



}
