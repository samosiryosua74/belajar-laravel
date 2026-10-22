@extends('layouts.main') {{-- Sesuaikan dengan nama file layout utama templatemu --}}

@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#">/ User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Tambah User</h1>
            <p class="mb-0">Form untuk menambahkan data user baru.</p>
        </div>
        <div>
            <a href="{{ route('user.index') }}" class="btn btn-dark">Kembali</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-lg-6 col-sm-6">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-dark" type="submit">Simpan</button>
                        <a href="{{ route('user.index') }}" class="btn btn-outline-gray-500">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection