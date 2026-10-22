@extends('layouts.main') {{-- Sesuaikan dengan nama file layout utama templatemu --}}

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User</li>
            </ol>
        </nav>
        <h2 class="h4">Data User</h2>
        <p class="mb-0">List data seluruh user</p>
    </div>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('user.create') }}" class="btn btn-sm btn-success d-inline-flex align-items-center">
            Tambah User
        </a>
    </div>
</div>

<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="border-gray-200">NAME</th>
                <th class="border-gray-200">EMAIL</th>
                <th class="border-gray-200">PASSWORD</th>
                <th class="border-gray-200">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td><span class="fw-bold">{{ $user->name }}</span></td>
                <td><span class="fw-normal">{{ $user->email }}</span></td>
                <td><span class="fw-normal text-truncate d-inline-block" style="max-width: 250px;">{{ $user->password }}</span></td>
                <td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit me-1"></i> Edit
                    </a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">
                            <i class="fas fa-trash me-1"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection