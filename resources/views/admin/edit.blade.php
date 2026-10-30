<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data CV Portofolio</title>
    <style>
        body {
            background: linear-gradient(135deg, #e0e5ec 0%, #cbd5e1 100%);
            font-family: 'Segoe UI', sans-serif;
            margin: 0; padding: 40px 20px;
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
        }
        .form-box {
            background-color: #ffffff; max-width: 600px; width: 100%;
            padding: 45px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            box-sizing: border-box;
        }
        .form-box h2 { font-size: 28px; font-weight: 700; color: #1e293b; margin: 0 0 35px 0; text-align: center; }
        .form-group { margin-bottom: 22px; display: flex; flex-direction: column; }
        .form-group label { font-size: 14px; font-weight: 600; color: #475569; margin-bottom: 8px; }
        .form-group input[type="text"], .form-group textarea, .form-group input[type="file"] {
            width: 100%; padding: 12px 16px; font-size: 15px; color: #334155;
            background-color: #f8fafc; border: 1.5px solid #e2e8f0; border-radius: 8px; outline: none; box-sizing: border-box;
        }
        .form-group input[type="text"]:focus, .form-group textarea:focus { border-color: #3b82f6; background-color: #fff; }
        .btn-submit {
            width: 100%; padding: 14px; font-size: 16px; font-weight: 600; color: #ffffff;
            background-color: #eab308; border: none; border-radius: 8px; cursor: pointer; margin-top: 10px;
        }
        .btn-submit:hover { background-color: #ca8a04; }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Edit Data CV Anda</h2>

    <!-- Perhatikan method diupdate menggunakan PUT -->
    <form action="{{ url('portofolio/' . $portofolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ $portofolio->nama_lengkap }}" required>
        </div>

        <div class="form-group">
            <label>Posisi / Bidang Keahlian</label>
            <input type="text" name="posisi_keahlian" value="{{ $portofolio->posisi_keahlian }}" required>
        </div>

        <div class="form-group">
            <label>Profil Singkat (Tentang Saya)</label>
            <textarea name="tentang_saya" rows="4" required>{{ $portofolio->tentang_saya }}</textarea>
        </div>

        <div class="form-group">
            <label>Riwayat Pendidikan</label>
            <input type="text" name="pendidikan" value="{{ $portofolio->pendidikan }}" required>
        </div>

        <div class="form-group">
            <label>Pengalaman Kerja</label>
            <input type="text" name="pengalaman_kerja" value="{{ $portofolio->pengalaman_kerja }}" required>
        </div>

        <div class="form-group">
            <label>Ganti Foto Profil (Kosongkan jika tidak ingin diubah)</label>
            <input type="file" name="gambar_portofolio">
        </div>

        <button type="submit" class="btn-submit">
            🔄 Perbarui & Simpan Perubahan CV
        </button>
    </form>
</div>

</body>
</html>
