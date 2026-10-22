@extends('layouts.main')

@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item"><a href="#">/ User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit User</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Edit User</h1>
            <p class="mb-0">Form untuk memperbarui data user.</p>
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
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <div class="col-lg-6 col-sm-6">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="mb-3">
                                <label for="password">Password (Opsional)</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Kosongkan jika tidak diubah">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-dark" type="submit">Update</button>
                        <a href="{{ route('user.index') }}" class="btn btn-outline-gray-500">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection