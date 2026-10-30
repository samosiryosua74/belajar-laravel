<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Pembuat CV Otomatis</title>
    <!-- Memanggil Bootstrap agar desain otomatis mewah -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            font-family: 'Segoe UI', system-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .hero-box {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="hero-box">
                <!-- Logo/Icon Aplikasi -->
                <h1 class="display-4 fw-bold mb-3" style="letter-spacing: -1px;">
                    📝 <span class="text-info">CV</span>Generator
                </h1>
                <p class="lead text-secondary mb-5 fs-5">
                    Sistem Aplikasi Ujian Pembuat Dokumen CV Otomatis Secara Instan & Praktis.
                    Cukup input data diri, sistem akan langsung mencetak dokumen CV siap cetak!
                </p>

                <!-- Tombol Navigasi Utama -->
                <div class="d-sm-flex justify-content-center gap-3">
                    <!-- Tombol untuk Mulai Mengisi Formulir -->
                    <a href="{{ route('portofolio.create') }}" class="btn btn-info btn-lg fw-bold px-4 py-3 text-white shadow">
                        ➕ Buat CV Sekarang
                    </a>

                    <!-- Tombol untuk Melihat Hasil yang Sudah Ada -->
                    <a href="{{ route('portofolio.index') }}" class="btn btn-outline-light btn-lg fw-bold px-4 py-3">
                        📁 Lihat Portofolio
                    </a>
                </div>

                <div class="mt-5 text-muted small">
                    Ujian Pemrograman Web &copy; 2026 - Nim Akhir: 0436
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
