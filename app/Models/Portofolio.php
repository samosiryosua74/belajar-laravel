<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    // Hubungkan model ini ke nama tabel ujian kamu
    protected $table = 'portofolio_0436';

    // Daftarkan kolom yang boleh diisi melalui form input
    protected $fillable = [
        'nama_lengkap',
        'posisi_keahlian',
        'tentang_saya',
        'pendidikan',
        'pengalaman_kerja',
        'gambar_portofolio',
    ];
}
