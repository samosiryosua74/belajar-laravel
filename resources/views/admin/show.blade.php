<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak CV Portofolio</title>
    <!-- Memanggil CSS Bootstrap agar tombol dan tata letak otomatis rapi -->
    <link href="https://jsdelivr.net" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        /* Membuat halaman berbentuk kotak putih seperti selembar kertas A4 */
        .kertas-cv {
            background-color: white;
            max-width: 800px;
            margin: 30px auto;
            padding: 50px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-top: 8px solid #333;
        }
        .garis-pembatas { border-top: 2px solid #333; margin-top: 5px; margin-bottom: 20px; }
        /* Menyembunyikan tombol menu saat kertas di-print/cetak ke PDF */
                /* Menyembunyikan tombol menu dan merapikan kertas saat dicetak ke PDF */
        @media print {
            .no-print { display: none !important; }
            body { background-color: white; margin: 0; padding: 0; }
            .kertas-cv {
                margin: 0 auto;
                padding: 40px !important;
                box-shadow: none;
                border-top: none;
                width: 100%;
                max-width: 100%;
                page-break-after: always;
            }
        }

    </style>
</head>
<body>

@foreach($portofolios as $p)

<!-- Navigasi Menu Tombol: Dipastikan rapi sejajar ke samping -->
<div class="container text-center mt-4 no-print">
    <div class="d-inline-flex gap-2 p-2 bg-white shadow-sm rounded border">
        <!-- Tombol Cetak -->
        <button onclick="window.print()" class="btn btn-secondary fw-bold px-3">
            🖨️ Cetak / Simpan Jadi PDF
        </button>

        <!-- Tombol Buat Baru -->
        <a href="{{ route('portofolio.create') }}" class="btn btn-primary fw-bold px-3">
            ➕ Buat CV Baru
        </a>

        <!-- Tombol Edit Data -->
        <a href="{{ url('portofolio/' . $p->id . '/edit') }}" class="btn btn-warning fw-bold px-3 text-white">
            ✏️ Edit Data CV
        </a>

        <!-- Form dan Tombol Hapus -->
        <form action="{{ url('portofolio/' . $p->id) }}" method="POST" class="m-0" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data CV ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger fw-bold px-3">
                🗑️ Hapus Data Ini
            </button>
        </form>
    </div>
</div>


<div class="kertas-cv">
    <!-- Bagian Atas / Header CV -->
    <div class="row align-items-center mb-4">
        <div class="col-md-8">
            <h1 class="fw-bold text-uppercase mb-1" style="letter-spacing: 1px;">{{ $p->nama_lengkap }}</h1>
            <h5 class="text-secondary style="font-style: italic;">{{ $p->posisi_keahlian }}</h5>
        </div>
        <div class="col-md-4 text-end">
            @if($p->gambar_portofolio)
                <img src="{{ asset('img/' . $p->gambar_portofolio) }}" alt="Foto" style="width: 110px; height: 140px; object-fit: cover; border: 1px solid #ddd;">
            @endif
        </div>
    </div>

    <!-- Bagian Profil -->
    <div class="mb-4">
        <h5 class="fw-bold text-uppercase m-0">Profil Singkat</h5>
        <div class="garis-pembatas"></div>
        <p class="text-dark" style="text-align: justify; line-height: 1.6;">{{ $p->tentang_saya }}</p>
    </div>

    <!-- Bagian Pendidikan -->
    <div class="mb-4">
        <h5 class="fw-bold text-uppercase m-0">Riwayat Pendidikan</h5>
        <div class="garis-pembatas"></div>
        <p class="text-dark" style="line-height: 1.6;">{{ $p->pendidikan }}</p>
    </div>

    <!-- Bagian Pengalaman -->
    <div class="mb-4">
        <h5 class="fw-bold text-uppercase m-0">Pengalaman Kerja</h5>
        <div class="garis-pembatas"></div>
        <p class="text-dark" style="line-height: 1.6;">{{ $p->pengalaman_kerja }}</p>
    </div>
</div>
@endforeach

</body>
</html>
