<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pembuat CV Otomatis</title>
    <style>
        /* Desain Background Halaman Utama */
        body {
            background: linear-gradient(135deg, #e0e5ec 0%, #cbd5e1 100%);
            font-family: 'Segoe UI', -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Kotak Putih Utama (Form Box) */
        .form-box {
            background-color: #ffffff;
            max-width: 600px;
            width: 100%;
            padding: 45px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            box-sizing: border-box;
        }

        /* Judul dan Sub-judul */
        .form-box h2 {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin: 0 0 8px 0;
            text-align: center;
        }
        .form-box p.subtitle {
            font-size: 14px;
            color: #64748b;
            margin: 0 0 35px 0;
            text-align: center;
        }

        /* Pembungkus Setiap Kolom Input (Agar Berurutan ke Bawah) */
        .form-group {
            margin-bottom: 22px;
            display: flex;
            flex-direction: column;
        }

        /* Label Teks di Atas Input */
        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: #475569;
            margin-bottom: 8px;
        }

        /* Kotak Input Teks & Textarea */
        .form-group input[type="text"],
        .form-group textarea,
        .form-group input[type="file"] {
            width: 100%;
            padding: 12px 16px;
            font-size: 15px;
            color: #334155;
            background-color: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            outline: none;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        /* Efek Berwarna Biru Saat Input Diklik/Fokus */
        .form-group input[type="text"]:focus,
        .form-group textarea:focus {
            background-color: #ffffff;
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }

        /* Keterangan Tambahan di Bawah Input */
        .form-text {
            font-size: 12px;
            color: #94a3b8;
            margin-top: 5px;
        }

        /* Desain Tombol Kirim Modern */
        .btn-submit {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            background-color: #1e293b;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.1s ease;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }

        /* Efek Saat Tombol Disorot Mouse */
        .btn-submit:hover {
            background-color: #0f172a;
        }
        .btn-submit:active {
            transform: scale(0.99);
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Formulir Pembuat CV</h2>
    <p class="subtitle">Isi data diri Anda di bawah ini untuk membuat dokumen CV otomatis</p>

    <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- 1. Input Nama Lengkap -->
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap Anda" required>
        </div>

        <!-- 2. Input Posisi -->
        <div class="form-group">
            <label>Posisi / Bidang Keahlian</label>
            <input type="text" name="posisi_keahlian" placeholder="Contoh: Web Developer / Akuntan" required>
        </div>

        <!-- 3. Input Tentang Saya -->
        <div class="form-group">
            <label>Profil Singkat (Tentang Saya)</label>
            <textarea name="tentang_saya" rows="4" placeholder="Ceritakan singkat deskripsi diri atau latar belakang Anda" required></textarea>
        </div>

        <!-- 4. Input Pendidikan -->
        <div class="form-group">
            <label>Riwayat Pendidikan</label>
            <input type="text" name="pendidikan" placeholder="Contoh: Universitas Indonesia - S1 Teknik Informatika" required>
        </div>

        <!-- 5. Input Pengalaman Kerja -->
        <div class="form-group">
            <label>Pengalaman Kerja</label>
            <input type="text" name="pengalaman_kerja" placeholder="Contoh: Web Designer di PT. Maju Bersama" required>
        </div>

        <!-- 6. Input Foto -->
        <div class="form-group">
            <label>Foto Profil Resmi</label>
            <input type="file" name="gambar_portofolio">
            <div class="form-text">Opsional, kosongkan jika tidak ingin memakai foto.</div>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn-submit">
            💾 Buat & Cetak CV Sekarang
        </button>
    </form>
</div>

</body>
</html>
